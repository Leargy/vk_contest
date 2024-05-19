<?php

namespace monsters;

use monsters\options\Creature;

class CreatureFactoryImpl implements CreatureFactory {
    private $random;

    public function __construct() {
        $this->random = new \Random();
    }

    public function createSlime() {
        $low = 10;
        $high = 20;

        return new Creature($low + (int)(($high-$low)*$this->random->nextFloat()), 3);
    }

    public function createWyvern() {
        $low = 30;
        $high = 120;

        return new Creature($low + (int)(($high-$low)*$this->random->nextFloat()), 12);
    }

    public function createRandomCreature() {
        $creature;
        $k = $this->random->nextInt(2);
        if ($k == 0) {
            $creature = $this->createWyvern();
        } else {
            $creature = $this->createSlime();
        }
        return $creature;
    }

    public function createCreatureFromType($creatureType) {
        $creature;
        switch ($creatureType){
            case "slime":
                $creature = $this->createSlime();
                break;
            case "wyvern":
                $creature = $this->createWyvern();
                break;
            default:
                $creature = $this->createRandomCreature();
        }
        return $creature;
    }
}
?>