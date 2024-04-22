<?php
include_once "functions.php";
session_start();

if (isset($_SESSION["auth"])) {
    header("Location: " . "index.php");
}

if(isset($_POST["submit"])) {
    login();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="login-container">
        <div class="logo"></div>
        <div class="login-text">
            <h3>SELAMAT DATANG DI CAR WASH <br> SMKN 2 BANJARMASIN</h3>
        </div>
        <form method="post" class="login-card">
            <div class="login-content">
                <input type="text" name="username" id="username" placeholder="username">
                <input type="password" name="password" id="password" placeholder="password">
                <div class="btn-group">
                    <button type="submit">Register</button>
                    <button type="submit" id="submit" name="submit">Login</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>