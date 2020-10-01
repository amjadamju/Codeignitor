
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->helper('url');?>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
 
    <title>Examify</title>
    <meta content="" name="descriptison" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="<?php echo base_url(); ?>assets/img/logo/logo-small.png" rel="icon" />
    <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Vendor CSS Files -->
    <link
      href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="<?php echo base_url(); ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/vendor/venobox/venobox.css" rel="stylesheet" />
    <link
      href="<?php echo base_url(); ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css"
      rel="stylesheet"
    />
    <link href="<?php echo base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Knight - v2.1.0
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>

    <!-- ======= Hero Section ======= -->
    <section id="hero" style="background-image: url('<?php echo base_url(); ?>assets/img/1046__1597516966_27.62.100.160.jpg');">
      <div class="hero-container">
        <a href="index.html" class="hero-logo" data-aos="zoom-in"
          ><img
            src="<?php echo base_url(); ?>assets/img/logo/logo-small.png"
            style="width: 100px;"
            alt=""
        /></a>

        <h1
          data-aos="zoom-in"
          style="
            font-weight: bolder;
            font-size: 55px;
            color: white;
            line-height: 60px;
          "
        >

        





          Welcome To Examify
        </h1>
        <h2 data-aos="fade-up " style="font-weight: 900; color: white;">
          The next big step in Learning.
        </h2>
        <a data-aos="fade-up" href="<?= base_url() ?>index.php/pages/login" class="btn-get-started scrollto"
          >Try for Free</a
        >
      </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container">
        <!-- The main logo is shown in mobile version only. The centered nav-logo in nav menu is displayed in desktop view  -->
        <div class="logo d-block d-lg-none">
          <a href="index.html"
            ><img
              src="./assets/img/logo/logovv.png"
              alt=""
              style="width: 100;"
              class="img-fluid"
          /></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul class="nav-inner">
            <li class="active"><a href="index.html">Home</a></li>
            <li>
              <a href="#about">About</a>
            </li>

            <li><a href="#working">How it Works</a></li>
            <li><a href="#featured">Features</a></li>

            <p class="nav-logo h1">
              <a
                style="
                  font-size: 30px;
                  font-family: 'Montserrat', sans-serif;
                  color: #ca296d;
                "
                href="index.html"
                >Examify</a
              >
            </p>

            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
        <!-- .nav-menu -->
      </div>
    </header>
    <!-- End Header -->