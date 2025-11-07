<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<h2 style='color:green;'>Register successful.</h2>";
    foreach ($_POST as $key) {
        echo "<div>
    <p>$key </p></div>";
    };
    var_dump($_POST);
}
