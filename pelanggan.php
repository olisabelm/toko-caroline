<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Fresh Box</title>
    <style>
        .container {
            margin-top: 2rem;
            padding: 0 1rem;
        }

        /* Gaya untuk judul */
        .heading {
            margin-bottom: 1.5rem;
        }

        /* Gaya untuk tombol */
        .btn {
            display: inline-block;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Gaya untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 0.75rem;
            border: 1px solid #dee2e6;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Gaya untuk aksi pada tabel */
        .table-actions {
            width: 10rem;
        }
    </style>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    require "koneksi.php";

    $sql = "SELECT * FROM pelanggan";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div class="container">
        <h1 class="heading mb-4">Data Pelanggan</h1>
        <form action="new-pelanggan.php" method="GET">
            <button type="submit" class="btn btn-primary mb-3">Tambah</button>
        </form>
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
                                <button type="submit" class="btn btn-info">Lihat</button>
                            </form>
                        </td>
                        <td>
                            <form action="delete-pelanggan.php" method="POST" onsubmit="return konfirmasi(this)">
                                <input type="hidden" name="id" value='<?= $pelanggan["id"] ?>'>
                                <button type="submit" class="btn btn-danger">Delete</button>
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
            return confirm(`Hapus pelanggan '${id}'?`);
        }
    </script>
</body>

</html>
