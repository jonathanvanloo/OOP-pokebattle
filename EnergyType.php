<?php


class EnergyType
{
    public $energyType;

    public function __construct($energyType) {
        $this->energyType = $energyType;
    }

    public function getEnergyType() {
        return $this->energyType;
    }

}