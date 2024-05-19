package controllers;

import java.util.List;

public interface GameController {

    void startGame(String filerPath);
    List<Integer> move(int room);
    void exitGame();

}
