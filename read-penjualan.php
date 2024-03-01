<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <div class="container mt-5">
        <h1 class="mb-4">Lihat Penjualan</h1>
        <form>
            <div class="mb-3 row">
                <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                    <input readonly type="text" class="form-control" id="namaBarang" value="<?= $penjualan["nama_barang"] ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                    <input readonly type="text" class="form-control" id="jumlah" value="<?= $penjualan["jumlah"] ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="totalHarga" class="col-sm-2 col-form-label">Total Harga</label>
                <div class="col-sm-10">
                    <input readonly type="text" class="form-control" id="totalHarga" value="<?= $penjualan["total_harga"] ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="diinputOleh" class="col-sm-2 col-form-label">Diinput Oleh</label>
                <div class="col-sm-10">
                    <input readonly type="text" class="form-control" id="diinputOleh" value="<?= $penjualan["username"] ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                <div class="col-sm-10">
                    <input readonly type="text" class="form-control" id="waktu" value="<?= $penjualan["created_at"] ?>">
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
