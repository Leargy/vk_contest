package rooms;

import chest.Chest;
import chest.ChestFactory;
import chest.ChestType;
import monsters.CreatureFactory;
import monsters.CreatureType;
import monsters.options.Creature;
import rooms.options.GameMasterable;
import rooms.options.RoomType;
import rooms.options.RoomWithChest;
import rooms.options.RoomWithCreature;

public class RoomBuilderImpl implements RoomBuilder {
    private final RoomFactory roomFactory;
    private final CreatureFactory creatureFactory;
    private final ChestFactory chestFactory;

    private GameMasterable room;

    public RoomBuilderImpl(RoomFactory roomFactory, CreatureFactory creatureFactory, ChestFactory chestFactory) {
        this.roomFactory = roomFactory;
        this.creatureFactory = creatureFactory;
        this.chestFactory = chestFactory;
    }
    public void createEmptyRoom(RoomType type) {
        room = roomFactory.createEmptyRoom(type);
    }
    @Override
    public void addCreature(CreatureType type) {
        if(room == null) return;
        Creature creature = creatureFactory.createCreatureFromType(type);
        room = new RoomWithCreature(room, creature);
    }

    @Override
    public void addChest(ChestType type) {
        if(room == null) return;
        Chest chest = chestFactory.createChestByType(type);
        room = new RoomWithChest(room, chest);
    }

    @Override
    public void reset() {
        room = null;
    }

    @Override
    public GameMasterable build() {
        return room;
    }
}
