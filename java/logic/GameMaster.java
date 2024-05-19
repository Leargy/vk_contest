package logic;

import chest.Chest;
import controllers.Connectable;
import controllers.model.Mappable;
import monsters.Hero;
import monsters.options.Creature;
import rooms.options.GameMasterable;
import rooms.options.RoomType;

public class GameMaster {
    private final Connectable controller;
    private Mappable map;
    private GameMasterable room;
    private Hero hero;

    public GameMaster(Connectable controller, Mappable map, Hero hero) {
        this(controller);
        this.map = map;
        this.room = map.getStartRoom();
        this.hero = hero;
    }
    public GameMaster(Connectable controller) {
        this.controller = controller;
    }

    public void lootChest(Hero hero, Chest chest) {
        hero.setScore(hero.getScore()+chest.loot());
    }

    public void performBattle(Hero hero, Creature creature) {
        while (creature.attack() > 0 && hero.attack() < creature.attack()) {
            creature.takeDamage();
        }
    }

    public void move2Room(int roomNumber) {
        GameMasterable[] rooms = room.getNextRooms();
        if(roomNumber < rooms.length && roomNumber >= 0) {
            room = rooms[roomNumber];
            room.explore(hero);
            if(room.getRoomType() == RoomType.end) finishGame();
        }
    }

    public int getHeroScore() {
        return hero.getScore();
    }

    private void finishGame() {
        controller.pingEndGame(hero.getScore());
    }

    public GameMasterable getRoom() {
        return room;
    }

    public void setRoom(GameMasterable room) {
        this.room = room;
    }

    public Hero getHero() {
        return hero;
    }

    public void setHero(Hero hero) {
        this.hero = hero;
    }

    public Mappable getMap() {
        return map;
    }
}
