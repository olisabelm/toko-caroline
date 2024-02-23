<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fresh Box</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom Fonts -->
  <style>
    
    /* Apply font family to navbar elements */
    .navbar-brand,
    .navbar-nav .nav-link {
      font-family: "Poppins", sans-serif; 
      color: white;
      font-size: 15px; 
    }

    .custom-navbar {
      background-color: #538D22; /* Warna latar belakang hijau muda */
      }
  </style>
</head>
<body>
  <?php
    session_start();

    if (!array_key_exists("username", $_SESSION)) {
        // jika di sesi ini tidak ada username yang aktif, proses ke logout
        header("location:logout.php");
    }
  ?>

<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Fresh Box</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="home.php">HOME</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="masterDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              MASTER
            </a>
            <ul class="dropdown-menu" aria-labelledby="masterDropdown">
              <?php if ($_SESSION["level"] == "admin") : ?>
                <li><a class="dropdown-item" href="user.php">User</a></li>
              <?php endif ?>
              <li><a class="dropdown-item" href="barang.php">Barang</a></li>
              <li><a class="dropdown-item" href="pelanggan.php">Pelanggan</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="transaksiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              TRANSAKSI
            </a>
            <ul class="dropdown-menu" aria-labelledby="transaksiDropdown">
              <li><a class="dropdown-item" href="penjualan.php">Penjualan</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Selamat datang, <?= $_SESSION["username"] ?>!
            </a>
            <ul class="dropdown-menu" aria-labelledby="userDropdown">
              <li><a class="dropdown-item" href="profil.php">Profil</a></li>
              <li><a class="dropdown-item" href="logout.php">Log out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
