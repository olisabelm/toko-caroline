<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .card-body {
            padding: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }

        .form-select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
            margin-left: 10px;
        }

        .text-center {
            text-align: center;
        }

        .mb-3 {
            margin-bottom: 15px;
        }

        .mt-5 {
            margin-top: 50px;
        }

        .col-sm-3 {
            width: 25%;
            float: left;
        }

        .col-sm-9 {
            width: 75%;
            float: left;
        }

        @media (max-width: 768px) {
            .col-sm-3,
            .col-sm-9 {
                width: 100%;
            }
        }
    </style>
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
                <h1 class="text-center mb-4">Lihat Barang</h1>
                <form action="update-barang.php" method="POST">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang["nama"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kategori">Kategori</label>
                        <select class="form-select" id="kategori" name="kategori">
                            <option value="tanaman_hias" <?= $barang["kategori"] == "tanaman_hias" ? "selected" : "" ?>>Tanaman Hias</option>
                            <option value="tanaman_aromatik" <?= $barang["kategori"] == "tanaman_aromatik" ? "selected" : "" ?>>Tanaman Aromatik</option>
                            <option value="tanaman_herbal" <?= $barang["kategori"] == "tanaman_herbal" ? "selected" : "" ?>>Tanaman Herbal</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" value="<?= $barang["stok"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="<?= $barang["harga"] ?>">
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
