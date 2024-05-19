<?php

namespace rooms;

use chest\ChestFactory;
use chest\ChestType;
use logic\GameMaster;
use monsters\CreatureFactory;
use monsters\CreatureType;
use rooms\options\GameMasterable;
use rooms\options\Room;
use rooms\options\RoomWithChest;
use rooms\options\RoomWithCreature;

class RoomFactoryImpl implements RoomFactory {
    private $muster;
    private $chestFactory;
    private $creatureFactory;

    public function __construct(GameMaster $muster, ChestFactory $chestFactory, CreatureFactory $creatureFactory) {
        $this->muster = $muster;
        $this->chestFactory = $chestFactory;
        $this->creatureFactory = $creatureFactory;
    }

    public function createEmptyRoom(RoomType $roomType): GameMasterable {
        return new Room($this->muster, $roomType);
    }

    public function createRoomWithChest(RoomType $roomType, ChestType $chestType): GameMasterable {
        $baseRoom = $this->createEmptyRoom($roomType);
        return new RoomWithChest($baseRoom, $this->chestFactory->createRandomChest());
    }

    public function createRoomWithCreature(RoomType $roomType, CreatureType $creatureType): GameMasterable {
        $baseRoom = $this->createEmptyRoom($roomType);
        return new RoomWithCreature($baseRoom, $this->creatureFactory->createCreatureFromType($creatureType));
    }
}
?>