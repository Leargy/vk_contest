<?php

namespace rooms\options;

use logic\GameMaster;
use monsters\options\Creature;
use monsters\Hero;

class RoomWithCreature extends RoomDecorator {
    private $creature;

    public function __construct(GameMasterable $explorable, Creature $creature) {
        parent::__construct($explorable);
        $this->creature = $creature;
    }

    public function explore(Hero $hero) {
        $this->room->getMuster()->performBattle($hero, $this->creature);
        $this->room->explore($hero);
    }

    public function getNextRooms() {
        return $this->room->getNextRooms();
    }

    public function getRoomType() {
        return $this->room->getRoomType();
    }

    public function getMuster() {
        return $this->room->getMuster();
    }
}
?>