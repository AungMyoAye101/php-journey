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

<form action="index.php" method="POST">
    <button type="submit" style="background:red;padding:4px 1rem ; color:wheat">Logout</button>
</form>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_destroy();
    setcookie("name", "", time() - 3600);
    header("Location: login.php");
    exit();
}
?>