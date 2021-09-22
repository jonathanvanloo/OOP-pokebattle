<?php


class Pikachu extends Pokemon {

    public function __construct($name)
    {
        $energyType = new EnergyType(EnergyType::LIGHTNING);
        $hitPoints = 60;
        $attack = [
            new Attack('Electric Ring', 50),
            new Attack('Pika Punch', 20)
        ];
        $weakness = new Weakness(EnergyType::FIRE, 1.5);
        $resistance = new Resistance('Fighting', 20);

        parent::__construct($name, $energyType, $hitPoints, $attack, $weakness, $resistance);
    }
}