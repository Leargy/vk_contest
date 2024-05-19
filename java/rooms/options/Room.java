package rooms.options;

import logic.GameMaster;
import monsters.Hero;
import java.util.ArrayList;
import java.util.List;

public class Room implements GameMasterable {
    private final List<GameMasterable> nextRooms;
    private final GameMaster gameMaster;
    private final RoomType roomType;
//    private int id;

//    public Room(GameMuster gameMuster, RoomType type, int id) {
//        this(gameMuster,type);
//        this.id = id;
//    }

    public Room(GameMaster gameMaster, RoomType type) {
        nextRooms = new ArrayList<>();
        this.gameMaster = gameMaster;
        roomType = type;
    }


    public void addRoom(GameMasterable room) {
        if(nextRooms.size() < 4) nextRooms.add(room);
    }

    @Override
    public void explore(Hero hero) {
    }

    @Override
    public GameMasterable[] getNextRooms() {
        return nextRooms.toArray(new GameMasterable[nextRooms.size()]);
    }

    @Override
    public RoomType getRoomType() {
        return roomType;
    }

    @Override
    public GameMaster getMuster() {
        return gameMaster;
    }
}
