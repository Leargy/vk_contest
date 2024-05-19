<?php
namespace Chest;

class Chest {
    private int $value;

    public function __construct(int $value) {
        $this->value = $value;
    }

    public function loot(): int {
        return $this->value;
    }
}
?>