<?php

$users = [
    ["name" => "Aung", "age" => 18],
    ["name" => "Kyaw", "age" => 16],
    ["name" => "Min", "age" => 20],
    ["name" => "Lwin", "age" => 25],
];
echo $users[0]['name'];

array_pop($users);
array_push($users, ["name" => "Zu", "age" => 18]);
array_unshift($users, ["name" => "Mon", "age" => 28]);


for ($i = 0; $i < count($users); $i++) {
    echo "<div> $i - {$users[$i]["name"]} </div>";
}

foreach ($users as $index => $user) {
    echo "<li> {$user["name"]} and {$user["age"]}</li>";
}
