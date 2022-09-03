<?php

$name = "Zaw";
$kyaw = "Kyaw";
$hello = "Hello " . $name;
//echo $hello;

$data = ["Orange", "Apple"];

$str = "$data[0] and $data[1]";
//echo $str;
//echo $data[0], $data[1];

//$num = 3;
//$num += 2;

//echo "<br>";
//echo $num;

$name .= " and ";
$name .= $kyaw;
echo "<br>";
echo $name;
/*
echo "<br>";
echo 5 ** 3;
echo "<br>";
echo 5%3;
*/

// comments
# comments
/* multi
    lines
    
$num++;
$num--;
--$num;
++$num;

*/

echo "<br>";

if(5 == "5") echo "Compare by == Loosely operator";

echo "<br>";
if(!(5 === "5")) echo "Compare by === strict operator";

echo "<br>";
if(5 !== "5") echo "Compare by !== operator";

echo "<br>";
if(5<>"7") echo "Compare <> not equal";

echo "<br> 3<=>5 is : ";
echo 3 <=> 5;

echo "<br> 5<=>5 is : ";
echo 5 <=> 5;

echo "<br> 7<=>5 is : ";
echo 7 <=> 5;

echo "<br> 3=== 4 || 3===3 is : ";
echo 3 === 4 || 3===3;

echo "<br> 3=== 4 or 3===3 is : ";
echo 3 === 4 or 3===3;


echo "<br> 3=== 3 xor 3===3 is : ";
echo 3 === 3 xor 3===3;

$kyaw = "";
echo "<br>";
echo $kyaw ? $kyaw : "Unknown";

$kyaw = "Kyaw";
echo "<br>";
echo $kyaw ?: "Unknown";

//echo $zaw ?: "Unknown"; cannot use if $zaw is undefined;

echo "<br>";
echo isset($zaw) ? $zaw : "Unknown";

echo "<br>";
echo $zaw ?? "Unknown";

$kyaw ??= $zaw;
echo "<br>";
echo $kyaw;