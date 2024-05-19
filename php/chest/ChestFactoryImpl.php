<?php

class Chest {
    private $value;

    public function __construct($value) {
        $this->value = $value;
    }
}

interface ChestFactory {
    public function createBlueChest();
    public function createVioletChest();
    public function createGoldChest();
    public function createRandomChest();
    public function createChestByType($type);
}

class ChestFactoryImpl implements ChestFactory {
    private $random;

    public function __construct() {
        $this->random = mt_rand();
    }

    public function createBlueChest() {
        $low = 1;
        $high = 5;

        return new Chest($low + (int)(($high - $low) * (mt_rand() / mt_getrandmax())));
    }

    public function createVioletChest() {
        $low = 20;
        $high = 50;

        return new Chest($low + (int)(($high - $low) * (mt_rand() / mt_getrandmax())));
    }

    public function createGoldChest() {
        $low = 60;
        $high = 100;

        return new Chest($low + (int)(($high - $low) * (mt_rand() / mt_getrandmax())));
    }

    public function createRandomChest() {
        $k = mt_rand(0, 2);
        if ($k == 0) {
            return $this->createBlueChest();
        } elseif ($k == 1) {
            return $this->createVioletChest();
        } else {
            return $this->createGoldChest();
        }
    }

    public function createChestByType($type) {
        switch ($type) {
            case 'blue':
                return $this->createBlueChest();
            case 'violet':
                return $this->createVioletChest();
            case 'gold':
                return $this->createGoldChest();
            default:
                return $this->createRandomChest();
        }
    }
}
?>


