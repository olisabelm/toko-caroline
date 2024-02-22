<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Penjualan</title>
    <style>
        /* Center the form */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            font-family: Poppins, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Form styling */
        .form {
            max-width: 500px;
            width: 100%;
            padding: 20px;
            border: 1px solid #ced4da;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .form-select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .text-center {
            text-align: center;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 8px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #ffffff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #ffffff;
        }
    </style>
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
                            <?= $barang["nama"] ?>, harga: <?= $barang["harga_jual"] ?>, stok: <?= $barang["stok"] ?>
                        </option>
                    <?php endwhile ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" min="0" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-secondary">RESET</button>
            </div>
        </form>
    </div>
</body>

</html>
