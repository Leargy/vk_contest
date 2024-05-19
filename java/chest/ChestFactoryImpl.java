package chest;

import java.util.Random;

public class ChestFactoryImpl implements ChestFactory {
    private final Random random;
    public ChestFactoryImpl() {
        random = new Random();
    }

    @Override
    public Chest createBlueChest() {
        int low = 1;
        int high = 5;

        return new Chest(low + (int)((high - low)* random.nextFloat()));
    }

    @Override
    public Chest createVioletChest() {
        int low = 20;
        int high = 50;

        return new Chest(low + (int)((high - low)* random.nextFloat()));
    }

    @Override
    public Chest createGoldChest() {
        int low = 60;
        int high = 100;

        return new Chest(low + (int)((high - low)* random.nextFloat()));
    }

    @Override
    public Chest createRandomChest() {
        Chest chest;
        int k = random.nextInt(3);
        if (k == 0) chest = createBlueChest();
        else if (k == 1) chest = createVioletChest();
        else chest = createGoldChest();

        return chest;
    }

    @Override
    public Chest createChestByType(ChestType type) {
        Chest chest;
        switch (type){
            case blue:
                chest = createBlueChest();
                break;
            case violet:
                chest = createVioletChest();
                break;
            case gold:
                chest = createGoldChest();
                break;
            default:
                chest = createRandomChest();
        }
        return chest;
    }
}
