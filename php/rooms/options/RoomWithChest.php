<?php
namespace rooms\options;

use logic\GameMaster;
use monsters\Hero;
use chest\Chest;

class RoomWithChest extends RoomDecorator{
    private $chest;

    public function __construct(GameMasterable $explorable, Chest $chest) {
        parent::__construct($explorable);
        $this->chest = $chest;
    }

    public function explore(Hero $hero) {
        if($this->chest != null) {
            $this->room->getMuster()->lootChest($hero, $this->chest);
        }
        $this->chest = null;
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