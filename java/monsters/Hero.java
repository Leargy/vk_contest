package monsters;

import monsters.options.Fightable;

import java.util.Random;

public class Hero implements Fightable {
    private int score;
    private final Random random;

    public Hero() {
        this.random = new Random();
        this.score = 0;
    }

    public int getScore() {
        return score;
    }

    public void setScore(int score) {
        this.score = score;
    }

    public int attack() {
        return random.nextInt(100);
    }
}
