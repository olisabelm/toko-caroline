<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Profil</title>
    <link rel="stylesheet" href="formstyle.css">
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    require "koneksi.php";

    $id = $_SESSION["id"];

    $sql = "SELECT * FROM user WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    $user = mysqli_fetch_array($query);
    ?>

    <div class="container">
        <form action="update-profil.php" method="POST" class="form">
            <h1>Profil</h1>

            <input type="hidden" name="id" value="<?= $id ?>">

            <div class="mb-3">
                <label for="username">Nama Pengguna</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $user["username"] ?>">
            </div>
            <div class="mb-3">
                <label for="new_password">Kata Sandi Baru Baru</label>
                <input required type="password" class="form-control" id="new_password" name="new_password">
            </div>
            <div class="mb-3">
                <label for="confirm_password">Ulangi Kata Sandi Baru</label>
                <input required type="password" class="form-control" id="confirm_password" name="confirm_password">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-secondary">Ulang</button>
            </div>
        </form>
    </div>
</body>

</html>
