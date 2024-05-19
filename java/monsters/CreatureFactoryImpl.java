package monsters;

import monsters.options.Creature;

import java.util.Random;

public class CreatureFactoryImpl implements CreatureFactory {
    private final Random random;
    public CreatureFactoryImpl() {
        random = new Random();
    }

    @Override
    public Creature createSlime() {
        int low = 10;
        int high = 20;

        return new Creature(low + (int)((high-low)*random.nextFloat()), 3);
    }

    @Override
    public Creature createWyvern() {
        int low = 30;
        int high = 120;

        return new Creature(low + (int)((high-low)*random.nextFloat()), 12);
    }

    @Override
    public Creature createRandomCreature() {
        Creature creature;
        int k = random.nextInt(2);
        if (k == 0) {
            creature = createWyvern();
        } else {
            creature = createSlime();
        }
        return creature;
    }

    @Override
    public Creature createCreatureFromType(CreatureType creatureType) {
        Creature creature;
        switch (creatureType){
            case slime:
                creature = createSlime();
                break;
            case wyvern:
                creature = createWyvern();
                break;
            default:
                creature = createRandomCreature();
        }
        return creature;
    }
}
