<?php 
require_once "functions.php";

session_start();

if (!$_SESSION["auth"]) {
    header("Location: " . "login.php");
}

$id = $_GET["id"];
$data = $datapaket[$id];


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


            <div class="detail">
                <div class="">
                    <div class="detail-flex">
                        <label for="transaksi">No Transaksi</label>
                        <input type="text">
                    </div>
                    <div class="detail-flex">
                        <label for="tanggal">Tanggal Transaksi</label>
                        <input type="text">
                    </div>
                    <div class="detail-flex">
                        <label for="nama">Nama Customer</label>
                        <input type="text">
                    </div>
                    <div class="detail-flex">
                        <label for="paket">Pilihan Paket</label>
                        <input type="text" value="<?= $data[0] ?>">
                    </div>
                    <div class="detail-flex">
                        <label for="paket">Pilihan Paket</label>
                        <input type="text" value="<?= $data[2] ?>">
                    </div>
                </div>
                <div class="right">
                    <div class="">
                    <div class="">
                        <input id="no" type="checkbox">
                        <label for="transaksi">Tidak ada tambahan - Rp.0</label>
                    </div>
                    <div class="">
                        <input id="wax" type="checkbox">
                        <label for="tanggal">Wax - Rp.10.000</label>
                    </div>
                    <div class="">
                        <input id="fog" type="checkbox">
                        <label for="nama">Fogging - Rp.20.000</label>
                    </div>
                    </div>
                    <div class="">
                        <button id="btn" class="btn">Hitung Harga total</button>
                    </div>
                </div>
            </div>
                <div class="harga">
                    <div class="row-1">
                    <div class="">
                        <label for="total">Total Harga</label>
                        <input id="total" value="<?= $data[2] ?>" type="text">
                    </div>
                    <div class="">
                        <label for="pembayaran">Pembayaran</label>
                        <input id="pembayaran" type="text">
                    </div>
                <button id="kembalian-btn" class="transkasi-btn">Hitung Kembalian</button>
                </div>
                <div class="harga">
                    <div class="row-1">
                    <div class="">
                        <label for="kembalian">Kembalian</label>
                        <input id="kembalian" type="text">
                    </div>
                    <div class="">
                    <button id="simpan" class="transkasi-btn">Simpan Transaksi</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-2">
            <?php require_once "components/footer.php" ?>
        </div>
    </div>
</body>
</html>