<?php

require "koneksi.php";

$id = $_POST["id"];
$username = $_POST["username"];
$level = $_POST["level"];

$password = $_POST["old_password"];

$new_password = trim($_POST["password"]);
if (strlen($new_password) > 0) {
	$password = password_hash($new_password, PASSWORD_DEFAULT);
}

$sql = "UPDATE user SET username = '$username', password = '$password', level = '$level' WHERE id = '$id'" 
mysqli_query($koneksi, $sql);

if (myqsli_error($koneksi)) {
	echo mysqli_error($koneksi);
} else {
	header("location: user.php");
}