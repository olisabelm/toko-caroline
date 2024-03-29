<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Pengguna</title>
    <link rel ="stylesheet" href="formstyle.css">
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    if ($_SESSION["level"] != "admin") {
        echo "Anda tidak dapat mengakses halaman ini";
        exit;
    }

    require "koneksi.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM user WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    $user = mysqli_fetch_array($query);
    ?>

    <div class="container">
        <form action="update-user.php" method="POST" class="form">
            <h1>Lihat Pengguna</h1>
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="hidden" name="old_password" value="<?= $user["password"] ?>">
            <div class="mb-3">
                <label for="username" class="form-label">Nama Pengguna</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $user["username"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Tingkat</label>
                <select class="form-select" id="level" name="level" required>
                    <option value="admin" <?= $user["level"] == "admin" ? "selected" : "" ?>>admin</option>
                    <option value="keuangan" <?= $user["level"] == "keuangan" ? "selected" : "" ?>>keuangan</option>
                    <option value="logistik" <?= $user["level"] == "logistik" ? "selected" : "" ?>>logistik</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-secondary">ULANG</button>
            </div>
        </form>
    </div>

</body>

</html>
