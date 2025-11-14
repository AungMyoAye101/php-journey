<?php

session_start();

if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
};

$name = $_SESSION['name'];
echo $name;
?>

<h1>Welcome <?= $name ?></h1>

<a href="profile.php"> profile</a>