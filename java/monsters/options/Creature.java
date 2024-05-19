package monsters.options;

public class Creature implements Fightable,Damagable{
    protected int power;
    protected int penalty;

    public Creature(int power, int penalty) {
        this.power = power;
        this.penalty = penalty;
    }

    @Override
    public void takeDamage() {
        if(power - penalty < 0) power = 0;
        else power -=penalty;
    }

    @Override
    public int attack() {
        return power;
    }
}
