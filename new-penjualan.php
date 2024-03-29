<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penjualan</title>
    <link rel="stylesheet" href="formstyle.css">
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    if ($_SESSION["level"] != "admin" && $_SESSION["level"] != "keuangan") {
        echo "Anda tidak dapat mengakses halaman ini";
        exit;
    }
    ?>

    <?php
    require "koneksi.php";

    $sql = "SELECT * FROM barang";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div class="container">
        <form action="create-penjualan.php" method="POST" class="form">
            <h1>Tambah Penjualan</h1>
            <div class="mb-3">
                <label for="barang">Barang</label>
                <select class="form-select" id="barang" name="id_barang">
                    <?php while ($barang = mysqli_fetch_array($query)) : ?>
                        <option value='<?= $barang["id"] ?>'>
                            <?= $barang["nama"] ?>, harga: <?= $barang["harga"] ?>, stok: <?= $barang["stok"] ?>
                        </option>
                    <?php endwhile ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_pelanggan">Id Pelanggan</label>
                <input type="text" class="form-control" id="pelanggan" name="id_pelanggan" required>
            </div>
            <div class="mb-3">
                <label for="jumlah">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" min="0" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-secondary">ULANG</button>
            </div>
        </form>
    </div>
</body>

</html>
