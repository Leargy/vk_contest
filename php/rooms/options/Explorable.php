<?php
namespace rooms\options;

use monsters\Hero;

interface Explorable {
    public function explore(Hero $hero);
    public function getNextRooms(): array;
    public function getRoomType(): RoomType;
}
?>