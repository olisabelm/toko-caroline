<?php

require "koneksi.php";

session_start();

$id_barang = $_POST["id_barang"];
$id_pelanggan = $_POST["id_pelanggan"]; // Get the id_pelanggan from the user input
$jumlah = $_POST["jumlah"];

$sql = "SELECT harga, stok FROM barang WHERE id = '$id_barang'";
$query = mysqli_query($koneksi, $sql);
$barang = mysqli_fetch_array($query);

if ($jumlah > $barang["stok"]) {
    echo "Stok barang tidak mencukupi";
    exit;
}

$total_harga = $jumlah * $barang["harga"];

$id_staff = $_SESSION["id"];

$sql = "SELECT COUNT(*) AS num_rows FROM pelanggan WHERE id = '$id_pelanggan'";
$query = mysqli_query($koneksi, $sql);
$result = mysqli_fetch_array($query);

if ($result["num_rows"] == 0) {
    echo "Error: The id_pelanggan you're trying to insert does not exist in the pelanggan table.";
    exit;
}

$sql = "INSERT INTO penjualan (id_barang, id_pelanggan, jumlah, total_harga, id_staff) VALUES ('$id_barang', '$id_pelanggan', '$jumlah', '$total_harga', '$id_staff')";
mysqli_query($koneksi, $sql);

$sql = "UPDATE barang SET stok = stok - $jumlah WHERE id = '$id_barang'";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("location: penjualan.php");
}