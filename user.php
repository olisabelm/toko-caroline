<<<<<<< HEAD
<!DOCTYPE html>
<html>

<head>
    <title>Fresh Box</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ea; /* Warna latar belakang hijau muda */
        }

        .table {
            background-color: #fff; /* Warna latar belakang putih */
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f3f7f4; /* Warna latar belakang untuk baris ganjil */
        }

        .table-hover tbody tr:hover {
            background-color: #ebf5e6; /* Warna latar belakang saat hover */
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

    <div class="container mt-4">
        <h1 class="mb-4">Data User</h1>
        <form action="new-user.php" method="GET">
            <button type="submit" class="btn btn-success mb-3">Tambah</button>
        </form>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Tanggal buat</th>
                        <th>Tanggal ubah</th>
                        <th colspan="2">Aksi</th>
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
                                    <input type="hidden" name="id" value='<?= $user["id"] ?>'>
                                    <button type="submit" class="btn btn-primary">Lihat</button>
                                </form>
                            </td>
                            <td>
                                <form action="delete-user.php" method="POST" onsubmit="return konfirmasi(this)">
                                    <input type="hidden" name="id" value='<?= $user["id"] ?>'>
                                    <button type="submit" class="btn btn-danger">Delete</button>
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
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
=======
<!DOCTYPE html>
<html>

<head>
    <title>Fresh Box</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ea; /* Warna latar belakang hijau muda */
        }

        .table {
            background-color: #fff; /* Warna latar belakang putih */
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f3f7f4; /* Warna latar belakang untuk baris ganjil */
        }

        .table-hover tbody tr:hover {
            background-color: #ebf5e6; /* Warna latar belakang saat hover */
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

    <div class="container mt-4">
        <h1 class="mb-4">Data User</h1>
        <form action="new-user.php" method="GET">
            <button type="submit" class="btn btn-success mb-3">Tambah</button>
        </form>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Tanggal buat</th>
                        <th>Tanggal ubah</th>
                        <th colspan="2">Aksi</th>
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
                                    <input type="hidden" name="id" value='<?= $user["id"] ?>'>
                                    <button type="submit" class="btn btn-primary">Lihat</button>
                                </form>
                            </td>
                            <td>
                                <form action="delete-user.php" method="POST" onsubmit="return konfirmasi(this)">
                                    <input type="hidden" name="id" value='<?= $user["id"] ?>'>
                                    <button type="submit" class="btn btn-danger">Delete</button>
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
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
>>>>>>> b9f3fe71ceaa7dff5ecd36263f5e1057f21c3829
