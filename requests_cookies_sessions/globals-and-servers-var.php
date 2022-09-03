<?php

$name = "Alice";

function hello() {
    var_dump($GLOBALS);
}

hello();
echo "<br><br><br>";

//var_dump($_SERVER);