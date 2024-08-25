<?php

namespace exercise_v;

require_once __DIR__ . "/Fruit.php";

class Grape extends Fruit {

    public function __construct() {
        parent::__construct( "Grape");
    }
    /**
     * @inheritDoc exercise_v\Fruit
     */
    public function color(): string {
        return "$this->name is purple";
    }
}

