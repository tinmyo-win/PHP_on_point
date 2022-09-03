<?php 

$time = date("h");

if( $time > 6 and $time < 18) echo "Day Time";
else echo "Night Time";

//code with alternative syntax

if($time > 6 and $time < 18) :
    echo "<br> Code with alternative : ";
    echo "Day Time";
else:
    echo "Night Time";
endif;

$day = date("D");

if($day === "Sun" || $day === "Sat") {
    echo "<br>";
    echo "Hey Weekend";
} elseif ($day === "Fri" ) {
    echo "<br>";
    echo "TGIF";
} else {
    echo "<br>";
    echo "Ahh, work Day";
}

// conditon with switch

switch($day) {
    case "Sat":
    case "Sun":
        echo "<br>";
        echo "Hahaaha Weekend";
        break;
    case "Fri":
        echo "<br>";
        echo "TGIF";
        break;
    default: 
        echo "Work Day";
}

// condition in match expression

$result = match($day) {
    "Sat", "Sun" => "Weekend",
    "Fri" => "TGIF",
    default => "Weekday"
};

echo "<br>";
echo $result;