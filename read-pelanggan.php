<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Pelanggan</title>
    <style>
        body {
            font-family: Poppins, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .btn-primary:hover,
        .btn-secondary:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    require "koneksi.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM pelanggan WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    $pelanggan = mysqli_fetch_array($query);
    ?>

    <div class="container">
        <h1>Lihat Pelanggan</h1>
        <form action="update-pelanggan.php" method="POST">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" value="<?= $pelanggan["nama"] ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" value="<?= $pelanggan["alamat"] ?>">
            </div>
            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon</label>
                <input type="text" id="nomor_telepon" name="nomor_telepon" value="<?= $pelanggan["nomor_telepon"] ?>">
            </div>
            <button type="submit" class="btn-primary">SIMPAN</button>
            <button type="reset" class="btn-secondary">RESET</button>
        </form>
    </div>
</body>

</html>
=======
<!DOCTYPE html>
<html>

<head>
    <title>Read Pelanggan</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $id = $_GET["id"];

    // cari barang yang memiliki id tersebut
    $sql = "SELECT * FROM pelanggan WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    // ambil data barang
    $pelanggan = mysqli_fetch_array($query);
    ?>

    <div>
        <form action="update-pelanggan.php" method="POST">
            <h1>Lihat Pelanggan</h1>

            <!-- id barang disembunyikan untuk keperluan update -->
            <input type="hidden" name="id" value="<?= $id ?>">

            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?= $pelanggan["nama"] ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?= $pelanggan["alamat"] ?>"></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td><input type="number" name="nomor_telepon" value="<?= $pelanggan["nomor_telepon"] ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">SIMPAN</button>
                        <button type="reset">RESET</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
>>>>>>> b9f3fe71ceaa7dff5ecd36263f5e1057f21c3829
