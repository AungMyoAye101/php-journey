<?php
session_start();
$name = $_SESSION["name"];
?>
<h1 style="color:darkblue">Your name is : $name</h1>
<form action="profile.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="photo">
    <button type="submit">Upload</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $file = $_FILES['photo'];
    echo $file['name'];
}
