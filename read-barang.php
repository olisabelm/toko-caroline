<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Box - Read Barang</title>
    <link rel="stylesheet" href="formstyle.css">
       
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    require "koneksi.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM barang WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    $barang = mysqli_fetch_array($query);
    ?>

    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <form action="update-barang.php" method="POST" class="form">
                <h1>Lihat Barang</h1>
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang["nama"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kategori">Kategori</label>
                        <select class="form-select" id="kategori" name="kategori">
                            <option value="tanaman hias" <?= $barang["kategori"] == "tanaman_hias" ? "selected" : "" ?>>Tanaman Hias</option>
                            <option value="tanaman aromatik" <?= $barang["kategori"] == "tanaman_aromatik" ? "selected" : "" ?>>Tanaman Aromatik</option>
                            <option value="tanaman herbal" <?= $barang["kategori"] == "tanaman_herbal" ? "selected" : "" ?>>Tanaman Herbal</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" value="<?= $barang["stok"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= $barang["harga"] ?>">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-secondary">RESET</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
