<?php
namespace rooms;

use chest\ChestType;
use monsters\CreatureType;
use rooms\options\GameMasterable;
use rooms\options\RoomType;

interface RoomFactory {
    public function createEmptyRoom(RoomType $roomType): GameMasterable;
    public function createRoomWithChest(RoomType $roomType, ChestType $chestType): GameMasterable;
    public function createRoomWithCreature(RoomType $roomType, CreatureType $creatureType): GameMasterable;
}
?>