package logic;

import monsters.Hero;
import rooms.options.GameMasterable;

public interface StateRepository {
    void saveGameState(Hero hero, GameMasterable room, int mapHash);
}
