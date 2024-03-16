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

    $sql = "SELECT penjualan.id, 
    barang.nama AS nama_barang,
    pelanggan.nama, 
    penjualan.jumlah, 
    penjualan.total_harga, 
    user.username, 
    penjualan.created_at 
     FROM penjualan 
     JOIN barang ON penjualan.id_barang = barang.id 
     JOIN pelanggan ON penjualan.id_pelanggan = pelanggan.id 
     JOIN user ON penjualan.id_staff = user.id 
     WHERE penjualan.id = '$id' ";
    $query = mysqli_query($koneksi, $sql);
    $penjualan = mysqli_fetch_array($query);
    ?>

    <div class="container">
        <form action="update-barang.php" method="POST" class="form center-form">
            <h1>Lihat Penjualan</h1>
            <div class="mb-3">
                <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                <input readonly type="text" class="form-control" id="namaBarang" value="<?= $penjualan["nama_barang"] ?>">
            </div>
            <div class="mb-3 row">
                <label for="namaPelanggan" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                <input readonly type="text" class="form-control" id="nama" value="<?= $penjualan["nama"] ?>">
            </div>
            <div class="mb-3>
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <input readonly type="text" class="form-control" id="jumlah" value="<?= $penjualan["jumlah"] ?>">
            </div>
            <div class="mb-3">
                <label for="totalHarga" class="col-sm-2 col-form-label">Total Harga</label>
                <input readonly type="text" class="form-control" id="totalHarga" value="<?= $penjualan["total_harga"] ?>">
            </div>
            <div class="mb-3">
                <label for="diinputOleh" class="col-sm-2 col-form-label">Diinput Oleh</label>
                <input readonly type="text" class="form-control" id="diinputOleh" value="<?= $penjualan["username"] ?>">
            </div>
            <div class="mb-3">
                <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                <input readonly type="text" class="form-control" id="waktu" value="<?= $penjualan["created_at"] ?>">
            </div>
        </form>
    </div>
</body>
</html>
