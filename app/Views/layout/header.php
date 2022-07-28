<?php

use App\Models\Konfigurasi_model;
use App\Models\Menu_model;

$konfigurasi  = new Konfigurasi_model;
$menu         = new Menu_model();
$site         = $konfigurasi->listing();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan  = $menu->layanan();
?>
<!-- ======= Top Bar ======= -->
<!--   <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> <?php echo tagline(); ?>
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now <?php echo telepon() ?>
      </div>
    </div>
  </div> -->

<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">


  <title>SCTC - Living Lab</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>/assets/upload/image/SCTC/Logo.png" rel="icon">
  <link href="<?php echo base_url() ?>/assets/dasbor/img/apple-touch-icon.png" rel="apple-touch-icon">

<title>Dewi Bootstrap Template - Index</title>
<meta content="" name="description">
<meta content="" name="keywords">




<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="<?php echo base_url() ?>/assets/dasbor/vendor/aos/aos.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/dasbor/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/dasbor/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/dasbor/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/dasbor/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/dasbor/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/dasbor/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="<?php echo base_url() ?>/assets/dasbor/css/style.css" rel="stylesheet">

<!-- =======================================================
  * Template Name: Dewi - v4.8.0
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <!-- ======= Header ======= -->




<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-between">


    <h1 class="logo"><img src="<?php echo base_url() ?>/assets/upload/image/SCTC/Logo.png"><a href="index.html" style="margin-left:10px;">SCTC</a></h1>

    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Company Profile</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Client & Association</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li class="dropdown"><a href="#"><span>Software ERP</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Odoo</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>IoT Solution</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Public Services</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Digital Product</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Service</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Smart City</a></li>
            <li><a href="#">Smart Government</a></li>
            <li><a href="#">Software Development</a></li>
            <li><a href="#">Training</a></li>
          </ul>
        </li>
        <li><a class="nav-link" href="#">News</a></li>
        <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li> -->
        <!-- <li>
          <form class="d-flex navlink" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </li> -->
        <li><a class="getstarted scrollto" href="#about">Contact Us</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->