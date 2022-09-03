<?php

class CheckOilPressure {
    public function check() {
        echo "Oil Pressure Ok.";
    }
}

class CheckBreakFluid {
    public function check() {
        echo "Break Fluid Ok.";
    }
}

class Car {
    public $oil;
    public $break;

    public function __construct() {
        $this->oil = new CheckOilPressure;
        $this->break = new CheckBreakFluid;
    }

    public function start() {
        $this->oil->check();
        $this->break->check();
        echo "Car engine started.";
    }
}

$car = new Car;
$car->start();