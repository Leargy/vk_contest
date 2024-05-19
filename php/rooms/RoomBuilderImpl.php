<?php

namespace rooms;

use chest\Chest;
use chest\ChestFactory;
use chest\ChestType;
use monsters\CreatureFactory;
use monsters\CreatureType;
use monsters\options\Creature;
use rooms\options\GameMasterable;
use rooms\options\RoomType;
use rooms\options\RoomWithChest;
use rooms\options\RoomWithCreature;

class RoomBuilderImpl implements RoomBuilder {
    private $roomFactory;
    private $creatureFactory;
    private $chestFactory;

    private $room;

    public function __construct($roomFactory, $creatureFactory, $chestFactory) {
        $this->roomFactory = $roomFactory;
        $this->creatureFactory = $creatureFactory;
        $this->chestFactory = $chestFactory;
    }

    public function createEmptyRoom($type) {
        $this->room = $this->roomFactory->createEmptyRoom($type);
    }

    public function addCreature($type) {
        if ($this->room === null) return;
        $creature = $this->creatureFactory->createCreatureFromType($type);
        $this->room = new RoomWithCreature($this->room, $creature);
    }

    public function addChest($type) {
        if ($this->room === null) return;
        $chest = $this->chestFactory->createChestByType($type);
        $this->room = new RoomWithChest($this->room, $chest);
    }

    public function reset() {
        $this->room = null;
    }

    public function build() {
        return $this->room;
    }
}
?>