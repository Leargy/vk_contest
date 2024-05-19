<?php

namespace monsters;

use monsters\options\Fightable;

use Random;

class Hero implements Fightable {
    private $score;
    private $random;

    public function __construct() {
        $this->random = new Random();
        $this->score = 0;
    }

    public function getScore() {
        return $this->score;
    }

    public function setScore($score) {
        $this->score = $score;
    }

    public function attack() {
        return $this->random->nextInt(100);
    }
}

?>