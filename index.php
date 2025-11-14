<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plindomre</title>
</head>

<body style="margin: 4rem;">
    <form action="index.php" method="POST">
        <label for=" text">Text</label>
        <input
            type="text"
            name="words"
            placeholder="words..."
            style="padding:8px  12px ; border-radius:1rem; display:block; margin:1rem 0;">
        <button
            type="submit"
            style="padding:8px 16px; border-radius:1rem; display:block;background:lightblue; border:none;">
            check</button>
    </form>
    <div style="font-size: 1.2rem; color:green; margin-top:1rem;">
        <?php
        $words = trim($_POST["words"]);

        if ($words) {
            $reverse_word = strrev($words);
            if ($words === $reverse_word) {
                echo "Plindorme word.";
            } else {
                echo "$words is not Plindorme word.";
            }
        }

        ?>
    </div>
</body>

</html>