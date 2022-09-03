<?php

session_start();

$_SESSION['user'] = 'Tom';

var_dump($_SESSION);

unset($_SESSION['user']);
echo "<br>";
var_dump($_SESSION);