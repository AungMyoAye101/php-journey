<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    try {
        require_once('db.con.php');
        $query = "UPDATE users SET name=:name,email=:email,pwd=:pwd WHERE id=1";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam("name", $name);
        $stmt->bindParam("email", $email);
        $stmt->bindParam("pwd", $pwd);
        $stmt->execute();
        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        die();
    } catch (PDOException $e) {
        die("Failed to update user . " . $e->getMessage());
    }
}
