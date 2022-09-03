<?php

function add($a = 0, $b = 0) {
    return $a + $b;
}

echo add(2, 3);

echo "<br>";
echo add(2); //Error too few arguments; solve with default parameter;

echo "<br>";
echo add(5, 6, 7); //Inganore rest arguments

echo "<br>";
$result = add(2, 3);
echo $result;

function restParameter($a, ...$b)  {  //Rest Parameter 
    print_r($b);
}

echo "<br>";
restParameter(1, 2, 3, 4, 5, 6, 7);

function arraySum(Array | int | float $nums): int | float { // Type Hint and return type Hint
    return $nums;
}

// echo arraySum(1, 2, 3); 
echo "<br>";
echo arraySum(1.5); // parameter are pass by value;

function hello($name) {
    $name = "Kyaw";
    echo "<br>";
    echo $name;
}

$name = "Zaw";
hello($name);
echo "<br>";
echo $name;

function helloRef(&$name) {
    $name = "Kyaw";
    echo "<br>";
    echo $name;
}

helloRef($name);
echo "<br>";
echo $name;

function one() {
    $name_one = "One";

    function two() {
        echo "Two";
    }
}

one();
echo "<br>";
echo $name_one;

echo "<br>";
two(); // functions are global scope two fun can ivoke after one invoke

function sayName() {

    global $name; // global variables accept;

    $name = "Zaw"; // can change variable bz of pass by refernce;
    echo "Hello $name";
}

echo "<br>";
sayName();

$say = "sayName";
echo "<br>";
$say(); // Variable function

$nums = [1, 2, 3, 4];

 function twice($n) {
     return $n * 2;
 }

 $result = array_map("twice", $nums);
 echo "<br>";
 print_r($result);

 $result = array_map(function($n) {
     return $n * 2;
 }, $nums);

 echo "<br>";
 print_r($result);


 $two = function($n) use($name) {
     $name = "Zaw Zaw";
     return $name;
 };

 echo "<br>";
 echo $two(3);

 echo "<br>";
 echo $name;

 $two = fn ($n) => $n * 2;

 echo "<br>";
 echo $two(3);

 $sayeHllo = fn () => "Hello $name";

 echo "<br>";
 echo $sayeHllo();

 function profile($name, $email, $age) {
     echo "$name ($age) @ $email";
 }

 echo "<br>";
 profile(age: 34,
         name: "Alice",
         email: "alice@gmail.com",
 );
