<?php

namespace logic;

use rooms\options\GameMasterable;

interface Loadable {
    public function getDungeon(): GameMasterable;
}

?>