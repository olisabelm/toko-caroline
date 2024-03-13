<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Data User</title>
    <link rel="stylesheet" href="tablestyle.css">
</head>

<header>
<?php include "menu.php"; ?>

</header>

<body>

    <?php
    if ($_SESSION["level"] != "admin") {
        echo "Anda tidak dapat mengakses halaman ini";
        exit;
    }

    require "koneksi.php";

    $sql = "SELECT * FROM user";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <main class="table">
        <section class="table__header">
            <h1>Data User</h1>
            <div class="button-container">
                <form action="new-user.php" method="GET">
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
                      <th scope="col">Username</th>
                      <th scope="col">Level</th>
                      <th scope="col">Tanggal Dibuat</th>
                      <th scope="col">Tanggal Diubah</th>
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
                                    <button type="submit" class="btn btn-primary btn-custom btn-view">Lihat</button>
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
        </section>
    </main>
    
    <script>
        function cetak() {
             window.print();
        }

        function konfirmasi(form) {
            formData = new FormData(form);
            id = formData.get("id");
            return confirm(`Hapus user '${id}'?`);
        }
    </script>
</body>

</html>
