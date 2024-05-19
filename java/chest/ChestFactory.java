package chest;

public interface ChestFactory {
    Chest createBlueChest();
    Chest createVioletChest();
    Chest createGoldChest();
    Chest createRandomChest();
    Chest createChestByType(ChestType type);
}
