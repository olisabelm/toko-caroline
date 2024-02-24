<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Box</title>
    <style>
        /* Center the form */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
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
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" min="0" required>
            </div>
            <div class="mb-3">
                <label for="harga_jual">Harga Jual</label>
                <input type="text" class="form-control" id="harga_jual" name="harga_jual" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-secondary">RESET</button>
            </div>
        </form>
    </div>
</body>

</html>
