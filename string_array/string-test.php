<?php

$name = "May";
$role = "Developer";
$company = "USSD Ltc";
echo "$name is a $role at $company.";

$fruit = "Apple";
$price = 1.99;
echo "<br>$fruit is \$$price<br>";
echo strlen($fruit);
echo "<br>";
echo strlen("ကိုတိုက်မောင်း");

$name = "Toe Yandanar";
echo "<br>";
echo substr($name, 4);
echo "<br>";
echo substr($name, 4, 4);
echo "<br>";
echo $name;

$str = "come here, quick quick";
echo "<br>";
echo str_replace("quick", "hurry", $str);