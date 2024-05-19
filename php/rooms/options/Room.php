<?php

namespace rooms\options;

use logic\GameMaster;
use monsters\Hero;
use interfaces\GameMasterable;
use rooms\RoomType;
use \ArrayList;

class Room implements GameMasterable {
    private $nextRooms;
    private $gameMaster;
    private $roomType;

    public function __construct(GameMaster $gameMaster, RoomType $type) {
        $this->nextRooms = new ArrayList();
        $this->gameMaster = $gameMaster;
        $this->roomType = $type;
    }

    public function addRoom(GameMasterable $room) {
        if(count($this->nextRooms) < 4) {
            $this->nextRooms[] = $room;
        }
    }

    public function explore(Hero $hero) {
    }

    public function getNextRooms() {
        return $this->nextRooms->toArray(new GameMasterable[count($this->nextRooms)]);
    }

    public function getRoomType() {
        return $this->roomType;
    }

    public function getMuster() {
        return $this->gameMaster;
    }
}

?>