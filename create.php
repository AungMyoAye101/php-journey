<form action="create.php" method="POST" style="display: flex; flex-direction:column;gap:12px;width:300px;margin:0 auto; background:wheat;padding:1rem;">
    <label for="name" style="display: flex; flex-direction:column;gap:4px;">
        Name
        <input type="text" name="name" id="name" placeholder="name">
    </label>

    <label for="email" style="display: flex; flex-direction:column;gap:4px;">
        <input type="email" name="email" placeholder="email">
    </label>
    <button type="submit">Create</button>
</form>

<?php
include "connect.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO users (name,email) VALUES ('$name','$email')";
    if ($connect->query($sql) === TRUE) {
        echo "User Created Successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
