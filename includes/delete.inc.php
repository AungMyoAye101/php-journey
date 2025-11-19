<?php

if ($_SERVER['REQUEST_METHOD'] === "DELETE") {
    $id = '1';

    try {
        require_once("db.con.php");
        $query = "DELETE users WHERE id=:id";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam("id", $id);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");
        die();
    } catch (PDOException $e) {
        die("Failed to delete user . " . $e->getMessage());
    }
}
