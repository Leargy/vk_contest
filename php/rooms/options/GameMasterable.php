<?php
namespace rooms\options;

use logic\GameMaster;

interface GameMasterable extends Explorable {
    public function getMuster();
}

?>