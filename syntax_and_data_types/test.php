<h1>Home Page</h1>
<p>
    Total: <?php 
    $num1 = 3;
    $num2 = 5;
    echo $num1 + $num2 ;

    echo "<br>";
    var_dump($num1);
    echo "<br>";

    $var = "Hello";
    var_dump($var);
    echo "<br>";
    ?>


    <?= " show with output tag" ?>
</p>

<?php 

$name = "Bob";
function hello() {
    global $name;

    if(3 < 4) {
        $age = 34;
    }
    echo $age;
    echo $name;
    echo "<br>";
    echo isset($name);
    echo "<br>";
    echo isset($old);
}
hello();

define("MIN", 1);
define("MAX", 10);
echo "<br> MIN is ";
echo MIN;

