<!DOCTYPE html>
<html>

<head>
    <title>New Pelanggan</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    if ($_SESSION["level"] != "admin" && $_SESSION["level"] != "logistik") {
        // jika di sesi ini levelnya bukan admin atau bukan logistik, akses ditolak
        echo "Anda tidak dapat mengakses halaman ini";
        exit;
    }
    ?>

    <div>
        <!-- atribut barang dikirim ke create-barang.php -->
        <form action="create-pelanggan.php" method="POST">
            <h1>Tambah Pelanggan</h1>
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td><input type="text" name="nomor_telepon"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">SIMPAN</button>
                        <button type="reset">RESET</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>