package rooms.options;

import logic.GameMaster;
import monsters.options.Creature;
import monsters.Hero;

public class RoomWithCreature extends RoomDecorator{
    private Creature creature;

    public RoomWithCreature(GameMasterable explorable, Creature creature) {
        super(explorable);
        this.creature = creature;
    }


    @Override
    public void explore(Hero hero) {
        room.getMuster().performBattle(hero,creature);
        room.explore(hero);
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
