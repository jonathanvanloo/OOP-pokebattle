<?php


class Weakness {

    public $type;
    public $multiplier;

    public function __construct($type, $multiplier) {
        $this->type = $type;
        $this->multiplier = $multiplier;
    }

    public function getType() {
        return $this->type;
    }

    public function getMultiplier() {
        return $this->multiplier;
    }
}