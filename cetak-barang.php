<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            padding: 0; 
        }

        .body-container {
            padding: 0 30px; 
        }

        navbar {
            padding: 0; 
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e6e6e6;
        }

        .title-container {
            margin-bottom: 20px;
            margin-top: 20px;
            font-size: 16px;
        }

        .btn-container {
            margin-bottom: 20px;
            display: flex;
            justify-content: flex-start;
        }

        /* Add, Edit, and Delete buttons */
        .btn-custom {
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 5px;
            margin-right: 5px;
        }

        .btn-view {
            background-color: #3e7e55;
            color: white;
        }

        .btn-lihat {
            background-color: #606c38;
            color: white;
        }

        .btn-delete {
            background-color: #283618;
            color: white;
        }

        @media print {
            body {
                margin: 0px
            }

            button {
                display: none;
            }
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

    <script type="text/javascript">
        window.print();
    </script>

    <script>
        function konfirmasi(form) {
            formData = new FormData(form);
            id = formData.get("id");
            return confirm(`Hapus barang '${id}'?`);
        }
    </script>
</body>

</html>
