<?php

$user = ["name" => "Alice", "age" => 33, "role" => "Developer"];
$fruits = ["Mongo", "Apple", "Banana", "Lemon"];

echo count($user);
echo "<br>";
echo "\$fruits is : ";
echo is_array($fruits);

echo "<br>";
echo "Mongo is in \$fruits: ";
echo in_array('Mongo', $fruits);
echo "<br>";
echo "OatShip is in \$fruits: ";
echo in_array('OatShip', $fruits);

echo "<br>";
echo "Lemon is in \$fruits at: ";
echo array_search('Lemon', $fruits);

array_push($fruits, 'OatShip');
echo "<br>";
print_r($fruits[count($fruits)-1]);
echo "<br>";
echo array_pop($fruits);

array_unshift($fruits, 'testFruit');
echo "<br>";
echo array_shift($fruits);

echo "<br>";
//print_r(array_splice($fruits, 2, 2));

echo "<br>";
print_r(array_keys($user));
echo "<br>";
print_r(array_values($user));

sort($user); //sort by value
echo "<br> Sort by Value: ";
print_r($user);

rsort($user); //sort by reverse value
echo "<br> sort by reverse Value";
print_r($user);

krsort($fruits); //sort by reverse keys
echo "<br> sort by reverse Keys";
print_r($fruits);

$str = "Mg Kyaw is very work hard";
$arr = explode(" ", $str); // string to array by explode
echo "<br> String to array by explode: ";
print_r($arr);

$fruits_str = implode(" ", $fruits);
echo "fruits are: $fruits_str";
