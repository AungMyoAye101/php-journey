<?php

$users = [
    ["name" => "Aung", "age" => 18],
    ["name" => "Kyaw", "age" => 16],
    ["name" => "Min", "age" => 20],
    ["name" => "Lwin", "age" => 25],
];
echo $users[0]['name'];



for ($i = 0; $i < count($users); $i++) {
    echo  $users[$i]["name"] . "\n";
}

foreach ($users as $index => $user) {
    echo "<li> {$user["name"]}</li>";
}

array_push($usrs, ['name' => "Ko", "age" => 12]);
