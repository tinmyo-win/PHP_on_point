<?php

// declare(strict_types = 1); Error for strict mode STRICT_ERROR
// error_reporting(0); Don't show any Error
// error_reporting(E_ALL)
// error_reporting(E_NOTICE | E_ERROR) 
// error_reporting(E_ALL & ~E_NOTICE)
/* 

 1 E_PARSE SYNTAX_ERROR
 2 E_ERROR that stop program
 3 E_WARNING show warning
 4 E_NOTICE show notice that can be error
 5 E_STRICT show error for strict mode
 6 E_DEPRECATED that should not use no more longer in next version
 7 E_ALL that show All error

function add(int $a, int $b) {
    echo $a + $b;
}

add("1", 2);