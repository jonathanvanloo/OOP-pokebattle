<?php


class Charmeleon extends Pokemon
{

    public function __construct($name)
    {
        $energyType = new EnergyType(EnergyType::FIRE);
        $hitPoints = 60;
        $attack = [
            new Attack('Head Butt', 10),
            new Attack('flare', 30)
        ];
        $weakness = new Weakness('water', 2);
        $resistance = new Resistance(EnergyType::LIGHTNING, 10);

        parent::__construct($name, $energyType, $hitPoints, $attack, $weakness, $resistance);
    }

}