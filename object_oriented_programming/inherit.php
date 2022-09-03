<?php 

class Animal {

    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    final public function run() { // final keyword for not allowing override
        echo "$this->name is running...";
    }


    static function info() {
        echo "I am the animal you know that...";
    }
}

class Dog extends Animal {

    private $color;

    public function __construct($name, $color) {
        parent::__construct($name);

        $this->color = $color;
    }
    public function bark() {
        echo "$this->name Woof... Woof... Oh see I am $this->color";
    }
}

final class Fox extends Dog { //don't allow inherit from Foxs

}

$dog = new Dog("Bobby", "Brown");
echo "<br>";
$dog->bark();
echo "<br>";
$dog->run();

echo "<br>";
Fox::info();