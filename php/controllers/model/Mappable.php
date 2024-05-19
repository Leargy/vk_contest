<?php

namespace Controllers\Model;

use Rooms\Options\GameMasterable;

interface Mappable {

    public function getMapFilePath(): string;
    public function getStartRoom(): GameMasterable;
    public function getShortestPath(): string;
    public function setShortestPath(string $path): void;

}
?>


