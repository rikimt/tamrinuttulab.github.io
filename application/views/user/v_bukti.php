<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar | Tamrinuttulab</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Favicons -->
 <link href="<?php echo base_url().'assets/images/logo/logo.png'?>" rel="icon">
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url().'assets/front-end/assets/vendor/animate.css/animate.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/front-end/assets/vendor/aos/aos.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/front-end/assets/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/front-end/assets/vendor/bootstrap-icons/bootstrap-icons.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/front-end/assets/vendor/boxicons/css/boxicons.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/front-end/assets/vendor/remixicon/remixicon.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/front-end/assets/vendor/swiper/swiper-bundle.min.css'?>" rel="stylesheet">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/font-awesome/css/font-awesome.min.css'?>">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url().'assets/front-end/assets/css/style.css'?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.10.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?php echo base_url('home');?>">Tamrinuttulab</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="<?php echo base_url('home');?>" class="logo me-auto"><img src="<?php echo base_url().'assets/images/logo/logo.png'?>" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="<?php echo base_url('home');?>">Home</a></li>
          <li><a href="<?php echo base_url('guru');?>">Guru</a></li>
          <li class="dropdown"><a href="#"><span class="active" >Pendaftaran</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?php echo base_url('daftar');?>">Daftar</a></li>
                  <li><a class="active" href="<?php echo base_url('buktidaftar');?>">Cetak Bukti Daftar</a></li>
                </ul>
            </li>
          <li><a href="<?php echo base_url('kontak');?>">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Cetak Bukti Pendaftaran</h2>
        <p>Tahun Ajaran 2023/2024</p>
      </div>
    </div><!-- End Breadcrumbs -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">
          <div class="col-lg-8 mt-5 mt-lg-0">

            <h1 class="display-6">Identitas Peserta</h1>
            <form class="row g-3" action="<?php echo site_url('Buktidaftar/cetak');?>" method="POST">
              <div class="col-md-6">
                <label class="form-label" for="noPeserta">No Peserta</label>
                <input type="text" class="form-control" name="xnoPeserta" placeholder="No Peserta" id="noPeserta" />
              </div>

              <div class="text-center"><button type="submit" class="btn get-started-btn">Kirim</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact text-center">
            <h4>Tamrinuttulab</h4>
            <img src="<?php echo base_url().'assets/images/logo/logo.png'?>" alt="" class="img-fluid float-start" style="width:50%;"></a>
            <img src="<?php echo base_url().'assets/images/logo/logo2.png'?>" alt="" class="img-fluid float-end" style="width:50%;"></a>
          </div>

          
          <div class="col-lg-6 col-md-6 footer-links">
            <h4>Informasi</h4>
     
                  <p><span><i class="fa fa-map-marker"></i> Alamat:</span> Kp.Golempang Kel.Sukamenak Kec.Purbaratu Tasikmalaya</p>
                  <p><span><i class="fa fa-phone"></i> Telp:</span> (+62 823-1770-1806) (+62 821-2592-8182)</p>
                  <p><span><i class="fa fa-envelope"></i> E-mail:</span> rtqyayasantamrinuttulab21@gmail.com</p>
                  <p><span><i class="fa fa-clock-o"></i> Buka:</span> Sabtu - Senin 06.00 WIB - 20.00 WIB</p>
                  <p><span><i class="fa fa-close"></i> Tutup:</span> Jum'at</p>
                
              </div>
              
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Jelajahi</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('home');?>">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('daftar');?>">Daftar</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('guru');?>">Guru</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('kontak');?>">Kontak</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">
      
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Tamrinuttulab</span></strong>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
              
            </div>
          </div>
          <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="https://www.facebook.com/profile.php?id=100080258791991" target="_blank" rel="nofollow" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/rtq_tamrinuttulab/" target="_blank" rel="nofollow" class="instagram"><i class="bx bxl-instagram"></i></a>
          </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="<?php echo base_url().'assets/front-end/assets/vendor/purecounter/purecounter_vanilla.js'?>"></script>
  <script src="<?php echo base_url().'assets/front-end/assets/vendor/aos/aos.js'?>"></script>
  <script src="<?php echo base_url().'assets/front-end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/front-end/assets/vendor/swiper/swiper-bundle.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/front-end/assets/vendor/php-email-form/validate.js'?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url().'assets/front-end/assets/js/main.js'?>"></script>
</body>

</html>