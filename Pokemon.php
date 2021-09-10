<?php


class Pokemon
{
    public $name;
    public $energyType;
    public $hitPoints;
    public $attack;
    public $weakness;
    public $resistance;

    public function __construct($name, $energyType, $hitPoints, $attack, $weakness, $resistance) {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

    public function attack($target, $attack) {

    }

    public function __toString() {
        return json_encode($this);
    }

    public function getName() {
        return $this->name;
    }

    public function getEnergyType()
    {
        return $this->energyType;
    }
}

//$targetEnergytype = $target->getenergyType();
//$WeaknessType = $this->Weakness[0];
//$WeaknessMultiplier = $this->Weakness[1];
//$resistanceType = $this->Resistance[0];
//$resistanceMultiplier = $this->Resistance[1];
//
//if ($targetEnergytype == $WeaknessType) {
//    $damage =  $attack * $WeaknessMultiplier;
//} else if ($targetEnergytype == $resistanceType) {
//    $damage =  $attack - $resistanceMultiplier;
//}
//$this->maxHealth - $damage;