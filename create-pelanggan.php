<<<<<<< HEAD
<?php

require "koneksi.php";

// nama, kategori, stok, harga_jual, harga_beli diambil dari new-barang.php
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$nomor_telepon = $_POST["nomor_telepon"];

$sql = "INSERT INTO pelanggan (nama, alamat, nomor_telepon) VALUES ('$nama', '$alamat', '$nomor_telepon')";
mysqli_query($koneksi, $sql);

// cek adakah error ketika menjalankan SQL
if (mysqli_error($koneksi)) {
    // jika ada error tampilkan
    echo mysqli_error($koneksi);
} else {
    // jika tidak ada error, kembali ke barang.php
    header("location: pelanggan.php");
=======
<?php

require "koneksi.php";

// nama, kategori, stok, harga_jual, harga_beli diambil dari new-barang.php
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$nomor_telepon = $_POST["nomor_telepon"];

$sql = "INSERT INTO pelanggan (nama, alamat, nomor_telepon) VALUES ('$nama', '$alamat', '$nomor_telepon')";
mysqli_query($koneksi, $sql);

// cek adakah error ketika menjalankan SQL
if (mysqli_error($koneksi)) {
    // jika ada error tampilkan
    echo mysqli_error($koneksi);
} else {
    // jika tidak ada error, kembali ke barang.php
    header("location: pelanggan.php");
>>>>>>> b9f3fe71ceaa7dff5ecd36263f5e1057f21c3829
}