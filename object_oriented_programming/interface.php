<?php 

interface Animal {
    public function move();

}

interface LiveStock {
    public function isFriendly();
}

class Dog implements Animal, LiveStock {
    public function move() {
        echo "The dog is running";
    }

    public function isFriendly() {
        return true;
    }
}

class Fish implements Animal {
    public function move() {
        echo "The Fish is swimming";
    }
}

function app(Animal $obj) {
    $obj->move();
}

app(new Fish);
echo "<br>";
app(new Dog);

class Cow implements Animal, LiveStock {
    public function move() {
        echo "The Cow is walking";
    }

    public function isFriendly() {
        return true;
    }
}

$cow = new Cow;
echo "<br>";
echo $cow->isFriendly();