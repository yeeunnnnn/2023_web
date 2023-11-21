<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
<?php
    $name = $_POST["username"];
    $password = $_POST["password"];

    echo "Username : ". $name;
    echo "<br>Password : ". $password;
?>
</body>
</html>