<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Data Barang</title>
    <link rel="stylesheet" href="tablestyle.css">
</head>

<header>
<?php include "menu.php"; ?>

</header>
<body>

    <?php
    require "koneksi.php";
    $sql = "SELECT * FROM barang";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <main class="table">
        <section class="table__header">
            <h1>Data Barang</h1>
            <div class="button-container">
                <form action="new-barang.php" method="GET">
                    <button type="submit" class="btn btn-primary btn-custom btn-view">
                        <span class="btn-text">Tambah</span>
                    </button>
                </form>
                <button onclick="cetaklaporan()" class="btn btn-primary btn-custom btn-view">Cetak</button>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
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
                                    <button type="submit" class="btn btn-primary btn-custom btn-view">
                                        <span class="btn-text">Lihat</span>
                                    </button>
                                </form>
                            </td>

                            <td>
                                <form action="delete-barang.php" method="POST" onsubmit="return konfirmasi(this)">
                                    <input type="hidden" name="id" value="<?= $barang["id"] ?>">
                                    <button type="submit" class="btn btn-danger btn-custom btn-delete">
                                        <span class="btn-text">Hapus</span>
                                    </button>
                                </form>
                            </td>
                            
                        </tr>
                        <?php $i++; ?>
                    <?php endwhile ?>
                </tbody>
            </table>
        </section>
    </main>



    <script>
        function cetaklaporan() {
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
