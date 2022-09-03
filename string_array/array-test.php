<?php

$users = ["Bob", "Alice", "Kyaw"]; // Numeric Array
var_dump($users);
echo "<br>";
print_r($users);

$user = ["name" => "Kyaw Kyaw", "age" => 34]; //Associative Array
echo "<br>";
print_r($user);

$fruits = [
    ["name" => "Apple", "price" => 1.99],
    ["name" => "Orange", "price" => 4.33],
    ["name" => "Banana", "price" => 5.10],
];
echo "<br>";
print_r($fruits);
echo "<br>";
print_r($fruits[0]);
echo "<br>";
print_r($fruits[1]['name']);

$fruits[5] = ["name" => "Mongo", "price" => 3.7];
$fruits[] = ["name" => "OatShit", "price" => 2.55];
echo "<br>";
print_r($fruits);

["name" => $name, "age" => $age] = $user;
echo "<br>";
echo $name;

$update_users = [...$users, "KO Lay", "Kyaw"];
echo "<br>";
print_r($update_users);
