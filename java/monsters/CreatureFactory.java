package monsters;

import monsters.options.Creature;

public interface CreatureFactory {
    Creature createSlime();
    Creature createWyvern();
    Creature createRandomCreature();
    Creature createCreatureFromType(CreatureType creatureType);
}
