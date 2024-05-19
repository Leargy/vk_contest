<?php

namespace rooms\options;

abstract class RoomDecorator implements GameMasterable {
    protected $room;

    public function __construct(GameMasterable $explorable) {
        $this->room = $explorable;
    }
}
?>