<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fresh Box</title>
  
  <!-- Custom Fonts -->
  <style>

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Custom styles */
    body {
      font-family: "Poppins", sans-serif;
    }

    .navbar {
      background-color: #538D22; /* Warna latar belakang hijau muda */
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center; /* Menyamakan vertikal align */
    }

    .navbar-brand,
    .nav-link,
    .navbar-text {
      color: white;
      font-size: 24px;
      font-weight: bold;
      text-decoration: none;
      line-height: 1; /* Menyamakan tinggi tulisan */
    }

    .navbar-brand,
    .navbar-nav,
    .navbar-text {
      display: flex;
      align-items: center; /* Menyamakan vertikal align */
    }

    .navbar-nav {
      text-align: center; 
      flex-grow: 1;
      justify-content: center;
    }

    .nav-item {
      list-style: none;
      display: inline-block;
      margin-right: 20px;
    }

    .nav-link {
      text-decoration: none;
      font-size: 15px;
      padding: 5px 10px; /* Menambahkan padding untuk menyesuaikan ruang */
    }

    .nav-link:hover {
      text-decoration: underline;
    }

    .dropdown-menu {
      display: none;
      position: absolute;
      background-color: #fff;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      list-style: none;
    }

    .dropdown-item {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-item:hover {
      background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-menu {
      display: block;
    }

    .navbar-toggler {
      display: none;
    }

    .navbar-text {
      color: white;
      margin-right: 20px;
    }

    @media (max-width: 768px) {
      .navbar-nav {
        display: none;
      }

      .navbar-toggler {
        display: block;
      }

      .navbar-collapse {
        display: none;
      }

      .show {
        display: block;
      }
    }

    @media print {
      nav {
        display: none;
      }
    }
  </style>
</head>
<body>
  <?php
    if (!array_key_exists("username", $_SESSION)) {
        header("location:logout.php");
    }
  ?>

  <nav class="navbar">
    <a class="navbar-brand" href="#">Fresh Box</a>
    <div class="navbar-nav">
      <ul class="me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="home.php">HOME</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="masterDropdown">
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
          <a class="nav-link dropdown-toggle" href="#" id="transaksiDropdown">
            TRANSAKSI
          </a>
          <ul class="dropdown-menu" aria-labelledby="transaksiDropdown">
            <li><a class="dropdown-item" href="penjualan.php">Penjualan</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown">
            Selamat datang, <?= $_SESSION["username"] ?>!
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="profil.php">Profil</a></li>
            <li><a class="dropdown-item" href="logout.php">Log out</a></li>
          </ul>
        </li>
      </ul> 
    </div>
  </nav>

  <script>
    function toggleNavbar() {
      var nav = document.querySelector('.navbar-collapse');
      if (nav.style.display === 'block') {
        nav.style.display = 'none';
      } else {
        nav.style.display = 'block';
      }
    }
  </script>
</body>
</html>
