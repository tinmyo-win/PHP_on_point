<?php

class Math {

    private $PI = 3.142;

    public function __call($name, $args) {
        echo "Method $name() doesn't exists";
    }

    static public function __callStatic($name, $args) {

        echo "Static Method $name() doesn't exists";
    }

    public function __invoke() {

        echo "This is not a function";
    }

    public function __get($name) {

        echo "Cannot get $name";
    }

    public function __set($name, $value) {

        echo "Cannot set $name with $value";
    }

    public function __toString() {
        
        return " PI = $this->PI";
    }

}

$math = new Math;
$math->hello();

echo "<br>";
Math::eain();

echo "<br>";
$math();

echo "<br>";
$math->PI;

echo "<br>";
$math->PI = 4;

echo "<br>";
echo $math;