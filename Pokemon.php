<?php

class Pokemon
{
    public static $pokemonPopulation;
    public $name;
    public $energyType;
    public $hitPoints;
    public $attack;
    public $weakness;
    public $resistance;

    /**
     * @var float|int
     */
    public function __construct($name, $energyType, $hitPoints, $attack, $weakness, $resistance) {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        self::$pokemonPopulation++;
    }

    /**
     * @return false|string
     */
    public function __toString() {
        return json_encode($this);
    }

    /**
     * als een attack uitgevoerd word check je ook de weakness en de resistance
     * @param $target
     * @param $attackNum
     */
    public function attack($target, $attackNum) {
        $target->checkResistance($this->attack[$attackNum], $this->energyType);
        $target->checkWeakness($this->attack[$attackNum], $this->energyType);
        if ($target->hitPoints <= 0) {
            self::$pokemonPopulation--;
        }
    }

    /**
     * kijk welke invloed de weakness op de attack damage heeft
     * @param $attack
     * @param $targetEnergyType
     */
    public function checkWeakness($attack, $targetEnergyType) {
        if ($targetEnergyType->energyType == self::getWeakness()->getType()){
            $this->setHealth($attack->damage * self::getWeakness()->getMultiplier());
        }
    }

    /**
     * kijk welke invloed de resistance op de attack damage heeft
     * @param $attack
     * @param $targetEnergyType
     */
    public function checkResistance($attack, $targetEnergyType) {
        if ($targetEnergyType->energyType == self::getResistance()->getType()){
            $this->setHealth($attack->damage - self::getResistance()->getValue());
        }
    }

    /**
     * @return mixed
     */
    public static function getPopulation() {
        return self::$pokemonPopulation;
    }

    /**
     * @param $damage
     */
    public function setHealth($damage) {
        $this->hitPoints -= $damage;
    }

    /**
     * @return mixed $weakness
     */
    public function getWeakness() {
        return $this->weakness;
    }

    /**
     * @return mixed $hitPoints
     */
    public function getHitPoints() {
        return $this->hitPoints;
    }

    /**
     * @return mixed $resistance
     */
    public function getResistance() {
        return $this->resistance;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}
