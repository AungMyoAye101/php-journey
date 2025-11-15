<a href="create.php"> create user</a>
<?php
include "connect.php";

$sql = "SELECT * FROM users";
$result = $connect->query($sql);
$row = $result->fetch_assoc();
foreach ($row as $key => $value) {
    echo " <div> $key ; $value </div>";
}
echo $row;
var_dump($row);
?>

<h2>User List</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['NAME'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
                <a href="update.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>

</table>