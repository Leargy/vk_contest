package rooms;

import chest.ChestType;
import monsters.CreatureType;
import rooms.options.GameMasterable;
import rooms.options.RoomType;

public interface RoomFactory {
    GameMasterable createEmptyRoom(RoomType roomType);
    GameMasterable createRoomWithChest(RoomType roomType, ChestType chestType);
    GameMasterable createRoomWithCreature(RoomType roomType, CreatureType creatureType);
}
