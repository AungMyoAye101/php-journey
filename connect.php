<?php
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "php_crud";

$connect = mysqli_connect($servername, $username, $dbpassword, $dbname);



if (!$connect) {
    die("mysql connection faile" . mysqli_connect_error());
}
