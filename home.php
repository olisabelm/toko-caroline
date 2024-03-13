<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Box</title>
    <style>
    	img {
		    max-width: 100%; /* Membuat gambar tetap dalam batas lebar */
		    height: auto; /* Menjaga rasio aspek gambar */
		    display: block; /* Menghapus whitespace di sekitar gambar */
		    margin: 0 auto; /* Menengahkan gambar */
        }
	</style>
</head>
<body>
    <?php include "menu.php"; ?>
    <img src="background16.png" alt="Halaman Home">
</body>
</html>