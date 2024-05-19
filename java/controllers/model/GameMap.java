package controllers.model;

import rooms.options.GameMasterable;

public class GameMap implements Mappable {
    private final String filePath;
    private int mapHash;
    private GameMasterable startRoom;
    private String shortestPath;

    public GameMap(String filePath, int mapHash, GameMasterable startRoom) {
        this.filePath = filePath;
        this.mapHash = mapHash;
        this.startRoom = startRoom;
        this.shortestPath = "";
    }

    @Override
    public String getMapFilePath() {
        return filePath;
    }

    @Override
    public GameMasterable getStartRoom() {
        return startRoom;
    }

    @Override
    public String getShortestPath() {
        return shortestPath;
    }

    @Override
    public void setShortestPath(String path) {
        this.shortestPath = path;
    }

    @Override
    public int hashCode(){
        return mapHash;
    }
}
