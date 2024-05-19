<?php

namespace logic;

use chest\ChestType;
use monsters\CreatureType;
use rooms\RoomBuilder;
use rooms\options\GameMasterable;
use rooms\options\RoomType;

class FSDungeonLoader implements Loadable {
    private $filePath;
    private $builder;

    public function __construct(RoomBuilder $builder, $filePath) {
        $this->filePath = $filePath;
        $this->builder = $builder;
    }

    public function get_dungeon() {
        //RoomFactory fabric = new RoomFactoryImpl(new GameMaster(), new ChestFactoryImpl(), new CreatureFactoryImpl());

        //return fabric.createEmptyRoom(RoomType.start);
        return null;
    }

    private function format2Rooms(array $mapping, array $rooms) {
        return null;
    }

    private function createRooms(array $roomsType, array $roomsCreatures, array $roomsChests) {
        $roomObjectsMap = [];
        foreach ($roomsType as $key => $value) {
            $this->builder->createEmptyRoom($value);
            if (array_key_exists($key, $roomsCreatures)) {
                $this->builder->addCreature($roomsCreatures[$key]);
            }
            if (array_key_exists($key, $roomsChests)) {
                $this->builder->addChest($roomsChests[$key]);
            }
            $roomObjectsMap[$key] = $this->builder->build();
            $this->builder->reset();
        }

        return $roomObjectsMap;
    }

    private function mapRooms($file) {
        return null;
    }

    private function defineRoomTypes($file) {
        return null;
    }
}
?>


