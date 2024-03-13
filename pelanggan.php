<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Data Pelanggan</title>
    <link rel="stylesheet" href="tablestyle.css">
</head>

<header>
<?php include "menu.php"; ?>

</header>

<body>

    <?php
    require "koneksi.php";

    $sql = "SELECT * FROM pelanggan";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <main class="table">
        <section class="table__header">
            <h1>Data Pelanggan</h1>
            <div class="button-container">
                <form action="new-pelanggan.php" method="GET">
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
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Tanggal dibuat</th>
                        <th scope="col">Tanggal diubah</th>
                        <th colspan="2" class="table-actions" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php while ($pelanggan = mysqli_fetch_array($query)) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $pelanggan["nama"] ?></td>
                            <td><?= $pelanggan["alamat"] ?></td>
                            <td><?= $pelanggan["nomor_telepon"] ?></td>
                            <td><?= $pelanggan["created_at"] ?></td>
                            <td><?= $pelanggan["updated_at"] ?></td>
                            <td>
                                <form action="read-pelanggan.php" method="GET">
                                    <input type="hidden" name="id" value='<?= $pelanggan["id"] ?>'>
                                    <button type="submit" class="btn btn-primary btn-custom btn-view">Lihat</button>
                                </form>
                            </td>
                            <td>
                                <form action="delete-pelanggan.php" method="POST" onsubmit="return konfirmasi(this)">
                                    <input type="hidden" name="id" value='<?= $pelanggan["id"] ?>'>
                                    <button type="submit" class="btn btn-danger btn-custom btn-delete">Delete</button>
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
        function cetak() {
             window.print();
        }

        function konfirmasi(form) {
            formData = new FormData(form);
            id = formData.get("id");
            return confirm(`Hapus pelanggan '${id}'?`);
        }
    </script>
</body>

</html>
