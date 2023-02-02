<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kontak | Tamrinuttulab</title>
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
          <li class="dropdown"><a href="#"><span>Pendaftaran</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?php echo base_url('daftar');?>">Daftar</a></li>
                  <li><a href="<?php echo base_url('buktidaftar');?>">Cetak Bukti Daftar</a></li>
                </ul>
            </li>
          <li><a class="active" href="<?php echo base_url('kontak');?>">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs text-center" data-aos="fade-in">
        <div class="container ">
            <h1>Kontak</h1>
            <h4>Silahkan Hubungi Kami</h4>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.32859171513655!2d108.26172395555258!3d-7.324951528109235!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd96ab0f8addafac!2sYAYASAN%20TAMRINUTTULAB!5e0!3m2!1sid!2sid!4v1675322982183!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Kp, Jl. Golempang, RT.06/RW.06, Sukamenak, Kec. Purbaratu, Kab. Tasikmalaya, Jawa Barat 46196</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>rtqyayasantamrinuttulab21@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Nomor HP:</h4>
                <p>1. +62 823-1770-1806</p>
                <p>2. +62 821-2592-8182</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="<?php echo base_url('kontak/kirim_pesan')?>" method="post" role="form" class="">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="xnama" class="form-control" id="name" placeholder="Nama" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="xemail" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="xsubject" id="subject" placeholder="Subjek" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="xmessage" rows="5" placeholder="Pesan" required></textarea>
              </div>
              <div class="text-end mt-3"><button type="submit" class="btn get-started-btn" name="submit">Kirim</button></div>
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