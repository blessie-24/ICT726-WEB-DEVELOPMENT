<?php

namespace exercise_v;

require_once __DIR__ . "/Fruit.php";

class Orange extends Fruit {

    public function __construct() {
        parent::__construct( "Orange");
    }
    /**
     * @inheritDoc exercise_v\Fruit
     */
    public function color(): string {
        return "$this->name is orange";
    }
}

