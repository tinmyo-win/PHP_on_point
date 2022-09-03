<?php

class Animal {
    private $name = "Bobby";

    public function __construct($name) {
        $this->name = $name;
    }

    public function run() {
      echo  "$this->name is running";
    }
}

$dog = new Animal("Aung Net");
$dog->run();

echo "<br>";
print_r($dog);

echo "<br>";
var_dump($dog);

class Water {
    static $short = "H2O";

    private function __construct(){

    }

    static function getWater($var) {
        echo "Water is " . static::$short;
    }
}

echo "<br>";
Water::getWater("OK");

class Circle {

    public function __construct(private $radius) // Constructor Property Promotion
    {
        //
    }

    public function getArea() {
        $area = 2 * 3.14 * $this->radius;
        echo "The area is $area";
    }
}

$circle = new Circle(4);

echo "<br>";
$circle->getArea();

