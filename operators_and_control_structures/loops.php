<?php

$nums = [100, 200, 400, -230, 50, 70, 95];

$i = 0;
$result = 0; 

while ($i < count($nums)) {
    if($nums[$i] < 0) {
        $i++;
        continue;
    }
    $result += $nums[$i++];
}
echo $result;

$result = 0;
$i = 0;

do {
    if($nums[$i] < 0) break;
    $result += $nums[$i++];
}  while($i < count($nums));
echo "<br>";
echo $result;

$result = 0;
for($j=0; $j < 5; $j++) {
    for($i = 0 ; $i < count($nums); $i++) {
        if($nums[$i] < 0 ) break;
        $result += $nums[$i];
    }

}
echo "<br>";
echo $result;

$result = 0;
for($j=0; $j < 5; $j++) {
    for($i = 0 ; $i < count($nums); $i++) {
        if($nums[$i] < 0 ) break 2; // break 2 code blocks;
        $result += $nums[$i];
    }

}
echo "<br>";
echo $result;

$result = 0;
foreach($nums as $num) {
    $result += $num;
}

echo "<br>";
echo $result;

$users = ["alice" => 95, "bob" => 85];

foreach($users as $name => $point) {
    echo "<br>";
    echo "$name got $point marks!";
}

foreach($users as $point) {
    echo "<br>";
    echo "got $point";
}

$name = "Kyaw";
$hello = function () use ($name) {
    echo "<br>";
    echo "Hello $name";
};

$hello();
