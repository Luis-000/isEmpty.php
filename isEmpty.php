<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="isEmpty.php" method="POST">
        <label>Username: </label>
        <input type="text" name="username">
        <label>password: </label>
        <input type="password" name="password">
        <input type="submit" name="login" value="Log In">
    </form>
</body>

</html>

<?php


if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "Username is missing!";
    } else if (empty($password)) {
        echo "Password is missing!";
    } else {
        echo "Welcome {$username}";
    }
}


/* 
foreach ($_POST as $key => $value) {
    echo "{$key} = {$value} <br>";
}
*/