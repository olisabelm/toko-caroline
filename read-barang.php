<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Barang</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
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
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang["nama"] ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="kategori" name="kategori">
                                <option value="makanan" <?= $barang["kategori"] == "makanan" ? "selected" : "" ?>>Makanan</option>
                                <option value="minuman" <?= $barang["kategori"] == "minuman" ? "selected" : "" ?>>Minuman</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stok" class="col-sm-3 col-form-label">Stok</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="stok" name="stok" value="<?= $barang["stok"] ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga_jual" class="col-sm-3 col-form-label">Harga Jual</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="<?= $barang["harga_jual"] ?>">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-secondary">RESET</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Barang</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
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
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang["nama"] ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="kategori" name="kategori">
                                <option value="makanan" <?= $barang["kategori"] == "makanan" ? "selected" : "" ?>>Makanan</option>
                                <option value="minuman" <?= $barang["kategori"] == "minuman" ? "selected" : "" ?>>Minuman</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stok" class="col-sm-3 col-form-label">Stok</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="stok" name="stok" value="<?= $barang["stok"] ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga_jual" class="col-sm-3 col-form-label">Harga Jual</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="<?= $barang["harga_jual"] ?>">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-secondary">RESET</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
>>>>>>> b9f3fe71ceaa7dff5ecd36263f5e1057f21c3829
