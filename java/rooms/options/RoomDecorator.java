package rooms.options;

public abstract class RoomDecorator implements GameMasterable {
    protected GameMasterable room;

    public RoomDecorator(GameMasterable explorable) {
        this.room = explorable;
    }
}
