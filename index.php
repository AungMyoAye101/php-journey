<form action="index.php" enctype="multipart/form-data" method="post">
    <input type="file" name="photo" id="">
    <button type="submit">upload</button>
</form>

<?php
$file = $_FILES['photo'];
if ($file) {
    echo $file['name'];
}
