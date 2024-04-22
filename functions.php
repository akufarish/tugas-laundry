<?php

$datapaket = array(
    array("Cuci mobil kecil", "suzuki karimun, toyota agya, swift, ayla, jazz", 40000),
    array("Cuci mobil sedang", "Crv. Hrv, mobilio, civic", 45000),
    array("Cuci mobil besar", "Fortuner, pajero, robicorn", 50000),
    array("Cuci mobil sangat besar", "alpard, lexus, vellfire", 55000),
);

function login() {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "userlsp" && $password == "smkn2bjm") {   
        $auth = $_SESSION["auth"] = "$username";
        setcookie("auth", $auth);
        header("Location: " . "index.php");
    } else {
        echo "<script>alert('Username atau password salah!')</script>";
   }
}

function logout() {
    echo "<script>alert('s')</script>";
    session_start();
    setcookie("auth", "", 100);
    session_unset();
    session_destroy();

    header("Location: " . "login.php");
}