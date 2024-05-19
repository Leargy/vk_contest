<?php
namespace logic;

use monsters\Hero;
use rooms\options\GameMasterable;

interface StateRepository {
    public function saveGameState(Hero $hero, GameMasterable $room, int $mapHash);
}
?>