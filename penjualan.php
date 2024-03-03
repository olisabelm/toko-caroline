<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Fresh Box</title>
    <style>
    </style>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    require "koneksi.php";

    $sql = "SELECT penjualan.id, barang.nama as nama_barang, penjualan.jumlah, penjualan.total_harga, user.username, penjualan.created_at FROM barang JOIN penjualan on barang.id = penjualan.id_barang JOIN user ON user.id = penjualan.id_staff ORDER BY penjualan.created_at DESC";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div class="container">
        <h1>Data Penjualan</h1>
        <form action="new-penjualan.php" method="GET">
            <button type="submit" class="btn btn-primary mb-3">Tambah</button>
        </form>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Diinput oleh</th>
                    <th scope="col">Waktu</th>
                    <th scope="col" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php while ($penjualan = mysqli_fetch_array($query)) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $penjualan["nama_barang"] ?></td>
                        <td><?= $penjualan["jumlah"] ?></td>
                        <td><?= $penjualan["total_harga"] ?></td>
                        <td><?= $penjualan["username"] ?></td>
                        <td><?= $penjualan["created_at"] ?></td>
                        <td>
                            <form action="read-penjualan.php" method="GET">
                                <input type="hidden" name="id" value='<?= $penjualan["id"] ?>'>
                                <button type="submit" class="btn btn-info btn-sm">Lihat</button>
                            </form>
                        </td>
                        <td>
                            <form action="delete-penjualan.php" method="POST" onsubmit="return konfirmasi(this)">
                                <input type="hidden" name="id" value='<?= $penjualan["id"] ?>'>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>

    <script>

        function konfirmasi(form) {
            formData = new FormData(form);
            id = formData.get("id");
            return confirm(`Hapus penjualan '${id}'?`);
        }
    </script>
</body>

</html>

