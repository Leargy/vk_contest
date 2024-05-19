package chest;

import java.util.Random;

public class Chest {
    private int value;

    public Chest(int value) {
        this.value = value;
    }

    public int loot() {
        return value;
    }
}
