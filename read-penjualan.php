<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Box</title>
    <link rel="stylesheet" href="formstyle.css">
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $id = $_GET["id"];

    $sql = "SELECT penjualan.id, barang.nama as nama_barang, penjualan.jumlah, penjualan.total_harga, user.username, penjualan.created_at FROM barang JOIN penjualan on barang.id = penjualan.id_barang JOIN user ON user.id = penjualan.id_staff WHERE penjualan.id = '$id'";
    $query = mysqli_query($koneksi, $sql);
    $penjualan = mysqli_fetch_array($query);
    ?>

    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <form action="update-barang.php" method="POST" class="form">
                    <h1>Lihat Penjualan</h1>
                    <div class="mb-3 row">
                        <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                            <input readonly type="text" class="form-control" id="namaBarang" value="<?= $penjualan["nama_barang"] ?>">
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                            <input readonly type="text" class="form-control" id="jumlah" value="<?= $penjualan["jumlah"] ?>">
                    </div>
                    <div class="mb-3 row">
                        <label for="totalHarga" class="col-sm-2 col-form-label">Total Harga</label>
                            <input readonly type="text" class="form-control" id="totalHarga" value="<?= $penjualan["total_harga"] ?>">
                    </div>
                    <div class="mb-3 row">
                        <label for="diinputOleh" class="col-sm-2 col-form-label">Diinput Oleh</label>
                            <input readonly type="text" class="form-control" id="diinputOleh" value="<?= $penjualan["username"] ?>">
                    </div>
                    <div class="mb-3 row">
                        <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                            <input readonly type="text" class="form-control" id="waktu" value="<?= $penjualan["created_at"] ?>">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
