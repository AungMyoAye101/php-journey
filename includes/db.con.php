<?php

$dsn = "mysql:host=localhost;dbname=user-crud";
$usrname = "root";
$password = "";


try {
    $pdo = new PDO($dsn, $usrname, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection failed , " . $e->getMessage();
}
