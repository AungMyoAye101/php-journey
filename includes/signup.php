<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    try {
        require_once('db.con.php');

        $query = "INSERT users (name,email,pwd) VALUES (:name,:email,:pwd);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pwd", $pwd);

        $stmt->execute();

        $pdo = null;
        $stmt = null;
        $_SESSION['user'] = [['name' => $name], ['email' => $email]];
        header("Location: ../index.php");
        die();
    } catch (PDOException $e) {
        die("Signup faile"  . $e->getMessage());
    }
}
