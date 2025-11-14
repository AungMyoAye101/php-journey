<?php
session_start();
$name = $_SESSION["name"];
?>
<h1 style="color:darkblue">Your name is : <?= $name ?></h1>
<form action="profile.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="photo">
    <button type="submit">Upload</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $file = $_FILES['photo'];
    if ($file['error'] === 0) {
        move_uploaded_file($file['tmp_name'], "uploads/" . $file['name']);
    };
    echo $file['name'];
    echo "<img src='uploads/{$file['name']}' alt='{$file['name']}' style='width:120px'>";
}

?>
<a href="index.php"> Back to home </a>