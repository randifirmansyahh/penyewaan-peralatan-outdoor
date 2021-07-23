<?php
  $nama = $_SESSION['nama_user123'];
  $foto = $_SESSION['fotonya'];
  include "session.php";
?>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Penyewaan Peralatan Outdoor</title>
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="assets/images/pasim.png" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block"><a href='https://wa.me/+6285156061121'>Bantuan</a></li>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="profile.php" data-toggle="dropdown" aria-expanded="false">
              <?php
                    echo "<img class='img-xs rounded-circle' src='$foto' alt='profile image'>";
                  ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                <?php
                    echo "<img class='img-xs rounded-circle' src='$foto' alt='profile image'>";
                ?>
                  <p class="mb-1 mt-3 font-weight-semibold">
                  <?php
                  echo "$nama";
                  ?>
                  </p>
                  <p class="font-weight-light text-muted mb-0">randykelvin26@gmail.com</p>
                  <br><br>
                <a class="dropdown-item" href="profile.php">My Profile <span class="badge badge-pill badge-danger"></span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item" href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <h6></h6>
      <div align='top' class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="profile.php" class="nav-link">
                <div class="profile-image">
                  <?php
                    echo "<img class='img-xs rounded-circle' src='$foto' alt='profile image'>";
                  ?>
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">
                  <?php
                  echo"$nama";
                  ?>
                  </p>
                  <p class="designation">Admin</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Menu Utama</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datapenyewa.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Data Pengunjung</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="penyewaan.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Permintaan Sewa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pengembalian.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Pengembalian Barang</span>
              </a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="databarang.php">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Data Barang Sewa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="info.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Info</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Keluar</span>
              </a>
            </li>
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Ransmart_Outdoor</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links">
                    </ul>
                    <ul class="quick-links ml-auto"> 
                    </ul>
                  </div>
                </div>
              </div>
            </div>