<?php

namespace rooms;

use chest\ChestType;
use monsters\CreatureType;
use rooms\options\GameMasterable;
use rooms\options\RoomType;

interface RoomBuilder {
    public function createEmptyRoom(RoomType $type);
    public function addCreature(CreatureType $type);
    public function addChest(ChestType $type);

    public function reset();
    public function build(): GameMasterable;
}
?>