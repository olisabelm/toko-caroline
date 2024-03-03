<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="tablestyle.css">
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    require "koneksi.php";
    $sql = "SELECT * FROM barang";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div class="body-container"> <!-- Container untuk body -->
        <div class="container">
            <!-- Title container with margin -->
            <div class="title-container">
                <h1 class="mb-3">Data Barang</h1>
            </div>
            <!-- Button container with margin -->
            <div class="btn-container">
                <form action="new-barang.php" method="GET">
                    <button type="submit" class="btn btn-primary btn-custom btn-view">Tambah</button>
                </form>
                <!-- <form action="cetak-barang.php" method="GET"> -->
                     <button onclick="cetak()"><a target="_blank" href="cetak-barang.php" class="btn btn-primary btn-custom btn-view">Cetak</a></button>
                <!-- </form> -->
            </div>
            <div class="table-responsive table-custom">
                <table class="table table-bordered table-striped">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Tanggal dibuat</th>
                            <th scope="col">Tanggal diubah</th>
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
                                <td><?= $barang["harga"] ?></td>
                                <td><?= $barang["created_at"] ?></td>
                                <td><?= $barang["updated_at"] ?></td>
                                <td>
                                    <form action="read-barang.php" method="GET">
                                        <input type="hidden" name="id" value="<?= $barang["id"] ?>">
                                        <button type="submit" class="btn btn-warning btn-custom btn-lihat">Lihat</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="delete-barang.php" method="POST">
                                        <input type="hidden" name="id" value="<?= $barang["id"] ?>">
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
    </div>

    <script>
        function cetak() {
             window.print();
        }

        function konfirmasi(form) {
            formData = new FormData(form);
            id = formData.get("id");
            return confirm(`Hapus barang '${id}'?`);
        }
    </script>
</body>

</html>
