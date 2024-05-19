package logic;

import chest.ChestType;
import monsters.CreatureType;
import rooms.RoomBuilder;
import rooms.options.GameMasterable;
import rooms.options.RoomType;

import java.io.File;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class FSDungeonLoader implements Loadable{
    private String path;
    private RoomBuilder builder;

    public FSDungeonLoader(RoomBuilder builder,String filePath) {
        this.path = filePath;
        this.builder = builder;
    }

    @Override
    public GameMasterable get_dungeon() {
        //RoomFactory fabric = new RoomFactoryImpl(new GameMaster(), new ChestFactoryImpl(), new CreatureFactoryImpl());

        //return fabric.createEmptyRoom(RoomType.start);
        return null;
    }

    private GameMasterable format2Rooms(Map<Integer, List<Integer>> mapping, Map<Integer, GameMasterable> rooms) {

        return null;
    }

    private Map<Integer, GameMasterable> createRooms(Map<Integer, RoomType> rooms_type, Map<Integer, CreatureType> rooms_creatuers, Map<Integer, ChestType> rooms_chests) {

        Map<Integer, GameMasterable> roomObjectsMap = new HashMap<>();
        for (Map.Entry<Integer, RoomType> entry : rooms_type.entrySet()) {
            builder.createEmptyRoom(entry.getValue());
            if(rooms_creatuers.containsKey(entry.getKey())) builder.addCreature(rooms_creatuers.get(entry.getKey()));
            if(rooms_chests.containsKey(entry.getKey())) builder.addChest(rooms_chests.get(entry.getKey()));
            roomObjectsMap.put(entry.getKey(), builder.build());
            builder.reset();
        }

        return roomObjectsMap;
    }

    private Map<Integer, List<Integer>> mapRooms(File file) {
        return null;
    }

    private Map<Integer, List<Integer>> defineRoomTypes(File file) {
        return null;
    }

}
