<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>CRUD PHP USER</title>
</head>

<body>
    <nav class="nav-bar">
        <a href="/php_journey" class="title">CRUD</a>
        <div class="flex item-center gap-2">
            <a href="pages/profile.html" class="btn">profile </a>
            <a href="pages/signup.html" class="btn">signup</a>
            <a href="pages/update.html" class="btn">update</a>
        </div>
    </nav>

    <section class="hero">
        <h1>
            Welcome From PHP CRUD Program
        </h1>
        <h3>
            You can create a user , read ,write and delete.
        </h3>
        <div class="flex item-center gap-4">
            <a href="pages/signup.html" class="btn">signup</a>
            <a href="pages/update.html" class="btn">update</a>
        </div>
    </section>
    <section>
        <h3>Users list</h3>
        <table border="1px" cellpadding="10px" style="margin-top: 1rem ;">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>created at</th>
            </tr>
            <tr>

                <td>1</td>
                <td>a</td>
                <td>b</td>
                <td>2022</td>
            </tr>
            <tr>
                <td>1</td>
                <td>a</td>
                <td>b</td>
                <td>2022</td>
            </tr>
            <tr>
                <td>1</td>
                <td>a</td>
                <td>b</td>
                <td>2022</td>
            </tr>
            <tr>
                <td>1</td>
                <td>a</td>
                <td>b</td>
                <td>2022</td>
            </tr>

        </table>
    </section>
</body>

</html>