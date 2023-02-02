<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url()?>/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url()?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('NiceAdmin')?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('NiceAdmin')?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('NiceAdmin')?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('NiceAdmin')?>/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url('NiceAdmin')?>/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url('NiceAdmin')?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url('NiceAdmin')?>/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('')?>/assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/bidan.png" alt="">
        <span class="d-none d-lg-block">REMDAP</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
        <li class="nav">
            
              <a class="" href="<?= base_url('auth/logout')?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('')?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('users'); ?>">
          <i class="bi bi-grid"></i>
          <span>Data User</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('pegawai'); ?>">
          <i class="bi bi-grid"></i>
          <span>Data pegawai</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('pemeriksaan'); ?>">
          <i class="bi bi-grid"></i>
          <span>Data Pemeriksaan Pasien</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('pasien'); ?>">
          <i class="bi bi-grid"></i>
          <span>Data pasien</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('imunisasi');?>">
          <i class="bi bi-grid"></i>
          <span>Data Imunisasi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('kb');?>">
          <i class="bi bi-grid"></i>
          <span>Data Keluarga Berencana</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('rekam_medis')?>">
          <i class="bi bi-grid"></i>
          <span>Rekam Medis</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('lahiran')?>">
          <i class="bi bi-grid"></i>
          <span>Data Lahiran</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('periksa_kehamilan')?>">
          <i class="bi bi-grid"></i>
          <span>Data Periksa Kehamilan</span>
        </a>
      </li>
      <!--  -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
      <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Laporan
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Laporan Pasien</button>
    <button class="dropdown-item" type="button">Laporan</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div>
      
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="card">
            