<?php

require_once 'GameController.php';
require_once 'Connectable.php';
require_once 'GameMaster.php';
require_once 'StateRepository.php';

class Controller implements GameController, Connectable {
    private $gameMaster;
    private $connection;
    private $stateRepository;

    private function loadDungeon($file_path) {
        // Implementation here
    }

    public function pingEndGame($score) {
        $this->connection->sendGameScore($score);
    }

    public function startGame($filePath) {
        // Implementation here
    }

    public function move($room) {
        return [];
    }

    public function exitGame() {
        $this->stateRepository->saveGameState(
            $this->gameMaster->getHero(),
            $this->gameMaster->getRoom(),
            spl_object_hash($this->gameMaster->getMap())
        );
    }
}
?>
