package controllers.model;

import rooms.options.GameMasterable;

public interface Mappable {

    String getMapFilePath();
    GameMasterable getStartRoom();
    String getShortestPath();
    void setShortestPath(String path);

}
