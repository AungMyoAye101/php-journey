<?php

$name = "Aung";
echo "$name <br>";
echo strlen($name) . " String lenght <br>";
echo strpos($name, "g") . '<br>';
echo substr($name, 1, strlen($name)) . '<br>';
echo str_replace("A", "M", $name) . "<br>";
echo trim("   hello ");
echo implode('_', ["a", "b", "c"]);
echo explode('', $name);
