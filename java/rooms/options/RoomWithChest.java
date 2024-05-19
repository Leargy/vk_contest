package rooms.options;

import logic.GameMaster;
import monsters.Hero;
import chest.Chest;

public class RoomWithChest extends RoomDecorator{
    private Chest chest;

    public RoomWithChest(GameMasterable explorable, Chest chest) {
        super(explorable);
        this.chest = chest;
    }

    @Override
    public void explore(Hero hero) {
        if(chest != null) room.getMuster().lootChest(hero,chest);
        chest = null;
    }

    @Override
    public GameMasterable[] getNextRooms() {
        return room.getNextRooms();
    }

    @Override
    public RoomType getRoomType() {
        return room.getRoomType();
    }

    @Override
    public GameMaster getMuster() {
        return room.getMuster();
    }

}
