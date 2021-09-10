<?php


class Resistance {

    public $type;
    public $value;

    public function __construct($type, $value) {
        $this->type = $type;
        $this->value = $value;

    }

    public function getType() {
        return $this->type;
    }

    public function getValue() {
        return $this->value;
    }

}