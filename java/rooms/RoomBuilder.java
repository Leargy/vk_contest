package rooms;

import chest.ChestType;
import monsters.CreatureType;
import rooms.options.GameMasterable;
import rooms.options.RoomType;

public interface RoomBuilder {
    void createEmptyRoom(RoomType type);
    void addCreature(CreatureType type);
    void addChest(ChestType type);

    void reset();
    GameMasterable build();
}
