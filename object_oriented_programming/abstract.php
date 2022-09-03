<?php

abstract class Animal {

    public abstract function talk();

    public function run() {
        echo "running...";
    }
}

class Dog extends Animal {

    public function talk() {
        echo "Ok I will say Woff... Woof";
    }
}
$dog = new Dog;
$dog->talk();

echo "<br>";
$dog->run();