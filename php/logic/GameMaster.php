<?php

namespace Logic;

use Chest\Chest;
use Controllers\Connectable;
use Controllers\Model\Mappable;
use Monsters\Hero;
use Monsters\Options\Creature;
use Rooms\Options\GameMasterable;
use Rooms\Options\RoomType;

class GameMaster {
    private $controller;
    private $map;
    private $room;
    private $hero;

    public function __construct(Connectable $controller, Mappable $map = null, Hero $hero = null) {
        $this->controller = $controller;
        if ($map !== null && $hero !== null) {
            $this->map = $map;
            $this->room = $map->getStartRoom();
            $this->hero = $hero;
        }
    }

    public function lootChest(Hero $hero, Chest $chest) {
        $hero->setScore($hero->getScore() + $chest->loot());
    }

    public function performBattle(Hero $hero, Creature $creature) {
        while ($creature->attack() > 0 && $hero->attack() < $creature->attack()) {
            $creature->takeDamage();
        }
    }

    public function move2Room(int $roomNumber) {
        $rooms = $this->room->getNextRooms();
        if ($roomNumber < count($rooms) && $roomNumber >= 0) {
            $this->room = $rooms[$roomNumber];
            $this->room->explore($this->hero);
            if ($this->room->getRoomType() == RoomType::END) {
                $this->finishGame();
            }
        }
    }

    public function getHeroScore() {
        return $this->hero->getScore();
    }

    private function finishGame() {
        $this->controller->pingEndGame($this->hero->getScore());
    }

    public function getRoom() {
        return $this->room;
    }

    public function setRoom(GameMasterable $room) {
        $this->room = $room;
    }

    public function getHero() {
        return $this->hero;
    }

    public function setHero(Hero $hero) {
        $this->hero = $hero;
    }

    public function getMap() {
        return $this->map;
    }
}
?>


