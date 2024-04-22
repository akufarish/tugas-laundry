<?php 
require_once "functions.php";
session_start();

if (!$_SESSION["auth"]) {
    header("Location: " . "login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <div class="row-1">
            <?php require_once "components/navbar.php" ?>

            <div class="hero"></div>

            <div class="content">
                <h3>Daftar Paket Pencucian Mobil</h3>
                <div class="paket">
                    <?php $i = 0 ?>
                    <?php foreach($datapaket as $data) : ?>
                        <div class="paket-loop">
                            <div class="card">
                                <p><?= $data[0] ?></p>
                                <p><?= $data[1] ?></p>
                                <p><?= $data[2] ?></p>
                            </div>
                            <a href="detail.php?id=<?= $i++ ?>" class="paket-btn">PILIH PAKET</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="row-2">
            <?php require_once "components/footer.php" ?>
        </div>
    </div>
</body>
</html>