package controllers;

import logic.GameMaster;
import logic.StateRepository;

import java.util.Collections;
import java.util.List;

public class Controller implements GameController, Connectable {
    private GameMaster gameMaster;
    private UserConnection connection;
    private StateRepository stateRepository;

    private void loadDungeon(String file_path) {

    }

    public void pingEndGame(Integer score) {
        connection.sendGameScore(score);
    }

    @Override
    public void startGame(String filerPath) {

    }

    @Override
    public List<Integer> move(int room) {
        return Collections.emptyList();
    }

    @Override
    public void exitGame() {
        stateRepository.saveGameState(gameMaster.getHero(),gameMaster.getRoom(), gameMaster.getMap().hashCode());
    }
}
