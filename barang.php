<!DOCTYPE html>
<html>

<head>
    <title>Fresh Box</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        .btn-custom {
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 5px;
        }

        .btn-view {
            background-color: #007bff;
            color: white;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    require "koneksi.php";
    $sql = "SELECT * FROM barang";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div class="container mt-4">
        <h1 class="mb-3">Data Barang</h1>
        <form action="new-barang.php" method="GET">
            <button type="submit" class="btn btn-primary btn-custom">Tambah</button>
        </form>
        <div class="table-responsive mt-3">
            <table class="table table-bordered table-striped">
                <thead class="table-success">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Dibuat Pada</th>
                        <th scope="col">Diubah Pada</th>
                        <th scope="col" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php while ($barang = mysqli_fetch_array($query)) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $barang["nama"] ?></td>
                            <td><?= $barang["kategori"] ?></td>
                            <td><?= $barang["stok"] ?></td>
                            <td><?= $barang["harga_jual"] ?></td>
                            <td><?= $barang["created_at"] ?></td>
                            <td><?= $barang["updated_at"] ?></td>
                            <td>
                                <form action="read-barang.php" method="GET">
                                    <input type="hidden" name="id" value='<?= $barang["id"] ?>'>
                                    <button type="submit" class="btn btn-primary btn-custom btn-view">Lihat</button>
                                </form>
                            </td>
                            <td>
                                <form action="delete-barang.php" method="POST" onsubmit="return konfirmasi(this)">
                                    <input type="hidden" name="id" value='<?= $barang["id"] ?>'>
                                    <button type="submit" class="btn btn-danger btn-custom btn-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        function konfirmasi(form) {
            formData = new FormData(form);
            id = formData.get("id");
            return confirm(`Hapus barang '${id}'?`);
        }
    </script>
</body>

</html>
