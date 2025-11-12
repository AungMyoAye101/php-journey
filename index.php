<?php


$users = [["name" => "Aung", "age" => 20], ["name" => "Maung", "age" => 20]];


for ($i = 0; $i < count($users); $i++) {
    echo " {$users[$i]['name']} age {$users[$i]['age']}<br>";
}

foreach ($users as $key => $value) {
    echo "$key : name = {$value['name']} , value = {$value['age']} <br>";
}

$colors = ["code" => 'red', "code" => 'green', "code" => 'blue', "code" => 'orange'];
foreach ($colors as $key => $v) {
    echo $colors[$key];
}
$array = [
    ["a", 'b', 'v'],
    [3, 4, 6],
];

foreach ($array as [$a, $b]) {
    // Note that there is no $c here.
    echo "$a $b <br>";
}
