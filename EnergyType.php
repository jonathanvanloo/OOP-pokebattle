<?php


class EnergyType {

    const LIGHTNING = "lightning";
    const FIRE = "fire";
    public $energyType;

    public function __construct($energyType) {
        $this->energyType = $energyType;
    }

    public function getEnergyType() {
        return $this->energyType;
    }

}