<?php

session_start();

if(isset($_SESSION['email']))
{
    header('location: ./home.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./login.php" method="POST">
        <input type="email" name="email">
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Log In">
    </form>
</body>
</html>