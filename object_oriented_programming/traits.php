<?php 

trait Math {

    public function add($a, $b) {
        echo "<br>";
        echo $a + $b;
    }
}

trait Area {

    private $PI = 3.14;
    public function circle($radius) {
        echo "<br> The area of circle is : ";
        echo $this->PI * $radius * $radius;
    }
}

class Calculator {
    use Math, Area;
}

$calc = new Calculator;
$calc->add(3, 4);
$calc->circle(4);

class Circle {
    const PI = 3.14;

    public function getPI() {
        echo "<br>";
        echo static::PI;
    }
}

echo "<br>";
echo Circle::PI;

$cir = new Circle;
$cir->getPI();
echo "<br>";
echo Circle::class;
