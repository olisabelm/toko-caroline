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
    if ($_SESSION["level"] != "admin" && $_SESSION["level"] != "logistik") {
        echo "Anda tidak dapat mengakses halaman ini";
        exit;
    } 
    ?>

    <div class="container">
        <form action="create-barang.php" method="POST" class="form">
            <h1>Tambah Barang</h1>
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="kategori">Kategori</label>
                <select class="form-select" id="kategori" name="kategori" required>
                    <option value="tanaman hias">Tanaman Hias</option>
                    <option value="tanaman aromatik">Tanaman Aromatik</option>
                    <option value="tanaman herbal">Tanaman Herbal</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" min="0" required>
            </div>
            <div class="mb-3">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-secondary">RESET</button>
            </div>
        </form>
    </div>
</body>

</html>
