package rooms.options;

import monsters.Hero;

public interface Explorable {
    void explore(Hero hero);
    GameMasterable[] getNextRooms();
    RoomType getRoomType();
}
