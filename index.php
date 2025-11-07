

<?php
//String
$first_name = 'Mg Mg';
$last_name = "Lwin";

echo  'Your name is ' . $first_name . ' ' . $last_name;

//number 
$age = 18;
$limit = 18;

$days = 18 * 365;
echo "<div> You have passed $days days </div>";

for ($i = 0; $i < 10; $i++) {
    echo "<ul><li>$i</li></ul>";
}

$v = 0;
while ($v < 10) {
    echo $v . " days";
    $v++;
}

//arrays

$usernames = ["abc", "bbc", "ccc"];
foreach ($usernames as $name) {
    echo  "<h1> $name </h1>";
}

function sum_number($a, $b)
{
    return $a + $b;
}

echo sum_number(100, 202);
