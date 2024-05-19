package rooms;

import chest.ChestFactory;
import chest.ChestType;
import logic.GameMaster;
import monsters.CreatureFactory;
import monsters.CreatureType;
import rooms.options.*;

public class RoomFactoryImpl implements RoomFactory {
    private final GameMaster muster;
    private final ChestFactory chestFactory;
    private final CreatureFactory creatureFactory;

    public RoomFactoryImpl(GameMaster muster, ChestFactory chestFactory, CreatureFactory creatureFactory) {
        this.muster = muster;
        this.chestFactory = chestFactory;
        this.creatureFactory = creatureFactory;
    }

    @Override
    public GameMasterable createEmptyRoom(RoomType roomType) {
        return new Room(muster, roomType);
    }

    @Override
    public GameMasterable createRoomWithChest(RoomType roomType, ChestType chestType) {
        GameMasterable baseRoom = createEmptyRoom(roomType);
        return new RoomWithChest(baseRoom,chestFactory.createRandomChest());
    }

    @Override
    public GameMasterable createRoomWithCreature(RoomType roomType, CreatureType creatureType) {
        GameMasterable baseRoom = createEmptyRoom(roomType);
        return new RoomWithCreature(baseRoom,creatureFactory.createCreatureFromType(creatureType));
    }

}
