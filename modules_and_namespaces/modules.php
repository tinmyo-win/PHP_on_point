<?php

include("autoload.php"); // auotload (include) when declare (use keyword)
//include("Math.php");
//include_once "Math.php"; // no error when call the same files any time
// include("Math.php"); // error when double use same file
//require "Calculator.php"; //also the same (include)

use Library\Helper\Basic\Calculator;
use Library\Helper\Basic\Math;

// echo \Library\Helper\Math\Basic\add(1, 4); // Sub-namespace
// echo "<br>";
// echo \Calculator\add([1, 2, 3, 4]); // \Global Namespace Root Namespace

$calc = new Calculator;
var_dump($calc);

$math = new Math;



