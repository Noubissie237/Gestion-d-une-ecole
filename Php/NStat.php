<?php
  session_start();
  include "db.php";

  $tea = $_SESSION['idTeach'];

  $req1 = $connexion->query("SELECT * FROM score");
  $req2 = $connexion->query("SELECT * FROM teacher WHERE Id='$tea' ");


  foreach($req2 as $su)
    $sub = $su['Subjects'];

  $tmp = "Name";
  $req3 = $connexion->query("SELECT * FROM subjects WHERE $tmp='$sub'");
  foreach($req3 as $w)
  {
    $m = $w['Id'];
  }

  $req4 = $connexion->query("SELECT * FROM score WHERE Id_subject='$m' ");

  $marks = [];

  $ctrl = 0;
  $sum = 0;
  $nbre = 0;
  foreach($req4 as $mrks)  
  {
      $sum += $mrks['Mark'];
      $ctrl += 1;
      if($ctrl == 60)
      {
        $avr = $sum / 60;
        array_push($marks, $avr);
        $ctrl = 0;
        $sum = 0;
        $nbre += 1;
      }

  }

  $ArrSum = array_sum($marks);
  $FinalAvr = $ArrSum / $nbre;

  $succ = 0;
  $fail = 0;

  foreach($marks as $unik)
  {
    if($unik >= 10)
      $succ += 1;
    else
      $fail += 1;
  }

  $S1 = ($succ / $nbre) * 100;
  $S = (int)$S1;
  $F1 = ($fail / $nbre) * 100;
  $F = (int)$F1;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Teacher</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../Impact/assets/img/favicon.png" rel="icon">
  <link href="../Impact/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="../Impact/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Impact/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../Impact/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../Impact/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../Impact/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../bootstrap/css/Stat.css">

  <!-- Template Main CSS File -->
  <link href="../Impact/assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">tchambabaurel42@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+237 655 579 911</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        <a href="index.php" class="logOut"><i class="bi bi-box-arrow-left" title="Log Out" ></i></i></a>

      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Home<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>     
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Percentage Center>>></h2>
          <p>Here, you can View success percentage and failure percentage of <?= $sub; ?> course</p>
          <div class="d-flex justify-content-center justify-content-lg-start">

          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>



    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          
          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
              <svg viewBox="0 0 36 36" class="circle-svg">
    
                  <path class="around" stroke-dasharray="100, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>

                  <path class="percent" stroke-dasharray="<?= $S; ?>, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>

                  <text x="18" y="14" text-anchor="middle" dy="7" font-size="20"><?= $S; ?>%</text>
    
              </svg>              
            </div>


              <h2 class="title">
                <span style="color:green">SUCCESS</span>
              </h2>

              <div class="d-flex align-items-center">
                <div class="post-meta">
              
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
              <svg viewBox="0 0 36 36" class="circle-svg">
    
                  <path class="around" stroke-dasharray="100, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>

                  <path class="percent" stroke-dasharray="<?= $F; ?>, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>

                  <text x="18" y="14" text-anchor="middle" dy="7" font-size="20"><?= $F; ?>%</text>
    
              </svg>              
            </div>

            

              <h2 class="title">
                <span style="color:red">FAILURE</span>
              </h2>

              <div class="d-flex align-items-center">
                <div class="post-meta">
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

    

          
  <!-- Vendor JS Files -->
  <script src="../Impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../Impact/assets/vendor/aos/aos.js"></script>
  <script src="../Impact/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../Impact/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../Impact/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../Impact/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../Impact/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../Impact/assets/js/main.js"></script>

</body>

</html>