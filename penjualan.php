<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Penjualan</title>
    <link rel="stylesheet" href="tablestyle.css">
</head>
<header>
<?php include "menu.php"; ?>

</header>

<body>

    <?php
    require "koneksi.php";

   $sql = "SELECT penjualan.id, 
       barang.nama AS nama_barang,
       pelanggan.nama, 
       penjualan.jumlah, 
       penjualan.total_harga, 
       user.username, 
       penjualan.created_at 
        FROM penjualan 
        JOIN barang ON penjualan.id_barang = barang.id 
        JOIN pelanggan ON penjualan.id_pelanggan = pelanggan.id 
        JOIN user ON penjualan.id_staff = user.id 
        ORDER BY penjualan.created_at DESC";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <main class="table">
        <section class="table__header">
        <h1>Data Penjualan</h1>
        <div class="button-container">
        <form action="new-penjualan.php" method="GET">
            <button type="submit" class="btn btn-primary btn-custom btn-view">
                <span class="btn-text">Tambah</span>
            </button>
        </form>
         <button onclick="cetak()" class="btn btn-primary btn-custom btn-view">
                    <a target="_blank" href="cetak-barang.php" class="btn-text">Cetak</a>
                </button>
            </div>
        </section>
        <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Nama Pelanggan</th>
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
                        <td><?= $penjualan["nama"] ?></td>
                        <td><?= $penjualan["jumlah"] ?></td>
                        <td><?= $penjualan["total_harga"] ?></td>
                        <td><?= $penjualan["username"] ?></td>
                        <td><?= $penjualan["created_at"] ?></td>
                        <td>
                            <form action="read-penjualan.php" method="GET">
                                <input type="hidden" name="id" value='<?= $penjualan["id"] ?>'>
                                <button type="submit" class="btn btn-primary btn-custom btn-view">Lihat</button>
                            </form>
                        </td>
                        <td>
                            <form action="delete-penjualan.php" method="POST" onsubmit="return konfirmasi(this)">
                                <input type="hidden" name="id" value='<?= $penjualan["id"] ?>'>
                                <button type="submit"  class="btn btn-danger btn-custom btn-delete">Delete</button>
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

