<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            padding: 0;
        }

        h1 {
            color: #333;
        }
        
        .body-container {
            padding: 0 30px;
        }

        navbar {
            padding: 0;
        }

        .table {
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
            font-weight: bold;
            font-size: 16px;
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
    </style>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    if ($_SESSION["level"] != "admin") {
        echo "Anda tidak dapat mengakses halaman ini";
        exit;
    }

    require "koneksi.php";

    $sql = "SELECT * FROM user";
    $query = mysqli_query($koneksi, $sql);
    ?>

<div class="body-container"> 
        <div class="container">
            <div class="title-container">
                <h1 class="mb-3">Data User</h1>
            </div>
            <div class="btn-container">
                <form action="new-user.php" method="GET">
                    <button type="submit" class="btn btn-primary btn-custom btn-view">Tambah</button>
                </form>
            </div>
            <div class="table-responsive table-custom">
                <table class="table table-bordered table-striped">
                    <thead class="table-success">
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Username</th>
                        <th scope="col">Level</th>
                        <th scope="col">Tanggal buat</th>
                        <th scope="col">Tanggal ubah</th>
                        <th scope="col" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php while ($user = mysqli_fetch_array($query)) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $user["username"] ?></td>
                            <td><?= $user["level"] ?></td>
                            <td><?= $user["created_at"] ?></td>
                            <td><?= $user["updated_at"] ?></td>
                            <td>
                                <form action="read-user.php" method="GET">
                                    <input type="hidden" name="id" value="<?= $user["id"] ?>">
                                    <button type="submit" class="btn btn-warning btn-custom btn-lihat">Lihat</button>
                                 </form>
                            </td>
                            <td>
                                <form action="delete-user.php" method="POST" onsubmit="return konfirmasi(this)">
                                    <input type="hidden" name="id" value="<?= $user["id"] ?>">
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
    <script>
        function konfirmasi(form) {
            formData = new FormData(form);
            id = formData.get("id");
            return confirm(`Hapus user '${id}'?`);
        }
    </script>
</body>

</html>
