<?php

class Creature implements Fightable, Damagable {
    protected $power;
    protected $penalty;

    public function __construct($power, $penalty) {
        $this->power = $power;
        $this->penalty = $penalty;
    }

    public function takeDamage() {
        if ($this->power - $this->penalty < 0) {
            $this->power = 0;
        } else {
            $this->power -= $this->penalty;
        }
    }

    public function attack() {
        return $this->power;
    }
}

?>