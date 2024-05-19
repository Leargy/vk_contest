<?php

namespace Chest;

interface ChestFactory {
    public function createBlueChest();
    public function createVioletChest();
    public function createGoldChest();
    public function createRandomChest();
    public function createChestByType($type);
}
?>