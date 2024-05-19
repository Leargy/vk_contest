<?php

namespace Controllers\Model;

use Rooms\Options\GameMasterable;

class GameMap implements Mappable {
    private $filePath;
    private $mapHash;
    private $startRoom;
    private $shortestPath;

    public function __construct($filePath, $mapHash, GameMasterable $startRoom) {
        $this->filePath = $filePath;
        $this->mapHash = $mapHash;
        $this->startRoom = $startRoom;
        $this->shortestPath = "";
    }

    public function getMapFilePath() {
        return $this->filePath;
    }

    public function getStartRoom() {
        return $this->startRoom;
    }

    public function getShortestPath() {
        return $this->shortestPath;
    }

    public function setShortestPath($path) {
        $this->shortestPath = $path;
    }

    public function hashCode() {
        return $this->mapHash;
    }
}
?>


