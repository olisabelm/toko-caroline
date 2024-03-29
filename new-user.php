<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna</title>
    <link rel="stylesheet" href="formstyle.css">
        
</head>

<body style="background-image: url('background16.png'); background-repeat: no-repeat; background-size: cover;">
    <?php include "menu.php"; ?>

    <?php
    if ($_SESSION["level"] != "admin") {
        echo "Anda tidak dapat mengakses halaman ini";
        exit;
    }
    ?>

    <div class="container">
        <form action="create-user.php" method="POST" class="form">
            <h1>Tambah Pengguna</h1>
            <div class="mb-3">
                <label for="username" class="form-label">Nama Pengguna</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Tingkat</label>
                <select class="form-select" id="level" name="level" required>
                    <option value="admin">Admin</option>
                    <option value="keuangan">Keuangan</option>
                    <option value="logistik">Logistik</option>
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
