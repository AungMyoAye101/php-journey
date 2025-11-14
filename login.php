<form action="login.php" method="POST">
    <input type="text" name="name" placeholder="your name" style="padding:1rem;">
    <button type="submit">Submit</button>
</form>
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    setcookie('name', $name, time() + 3600);
    $_SESSION['name'] = $name;
    echo "Login success";
    header("Location: index.php");
    exit();
}
