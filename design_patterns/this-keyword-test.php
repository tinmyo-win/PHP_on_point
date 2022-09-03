<?php

class Test {
    private $name;
    private $phone;

    public function getThis() {
        return $this;
    }

    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    public function setPhone($phone) {
        $this->phone = $phone;

        return $this;
    }

    public function getInfo() {
        return $this;
    }
}

$test = new Test;
$getThis = $test->getThis();
print_r($getThis);

$name = $test->setName("Kyaw Kyaw");
print_r($name);

$phone = $test->setPhone("09347839");
print_r($phone);

$getInfo = $test->getInfo();
print_r($getInfo);
