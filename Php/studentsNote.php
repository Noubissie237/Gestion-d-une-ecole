<?php 
  session_start();
  $con=mysqli_connect("localhost", "root", "", "school");
  if(mysqli_connect_errno()){
      echo "Connection Fail".mysqli_connect_error(); 
  }

  $select = mysqli_query($con,"SELECT * FROM student");
  $class = $_GET['id'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student's Note</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script></script>
  <!-- Favicons -->
  <link href="../Impact/assets/img/favicon.png" rel="icon">
  <link href="../Impact/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="../Impact/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Impact/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../Impact/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../Impact/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../Impact/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../bootstrap/css/css.css" rel="stylesheet">

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

 

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>All Students in <?php 
            switch($class)
            {
              case 1 : echo 'From 1';break;
              case 2 : echo 'From 2';break;
              case 3 : echo 'From 3';break;
              case 4 : echo 'From 4';break;
              case 5 : echo 'From 5';break;
              case 6 : echo 'Lower Sixth Science';break;
              case 7 : echo 'Lower Sixth Art';break;
              case 8 : echo 'Upper Sixth Science';break;
              case 9 : echo 'Upper Sixth Art';break;
              default: break;
            }
          ?></h2>
        </div>

      </div>
    </div>

  
   

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">
      <?php 
/* Inclure le fichier config */
require_once "config.php";
                    
                    /* select query execution */

                    switch($class)
                    {
                      case 1 : $sql = "SELECT * FROM student WHERE Levels = 'From 1'";
                      break;
                      case 2 : $sql = "SELECT * FROM student WHERE Levels = 'From 2'";
                      break;
                      case 3 : $sql = "SELECT * FROM student WHERE Levels = 'From 3'";
                      break;
                      case 4 : $sql = "SELECT * FROM student WHERE Levels = 'From 4'";
                      break;
                      case 5 : $sql = "SELECT * FROM student WHERE Levels = 'From 5'";
                      break;
                      case 6 : $sql = "SELECT * FROM student WHERE Levels = 'Lowersixth Science'";
                      break;
                      case 7 : $sql = "SELECT * FROM student WHERE Levels = 'Lowersixth Art'";
                      break;
                      case 8 : $sql = "SELECT * FROM student WHERE Levels = 'Uppersixth Science'";
                      break;
                      case 9 : $sql = "SELECT * FROM student WHERE Levels = 'Uppersixth Art'";
                      break;
                      default: break;
                    }

                    
                    
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Id</th>";
                                        echo "<th>Last Name</th>";
                                        echo "<th>First Name</th>";
                                        echo "<th>Gender</th>";
                                        echo "<th>Levels</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['Id'] . "</td>";
                                        echo "<td>" . $row['Last_Name'] . "</td>";
                                        echo "<td>" . $row['First_Name'] . "</td>";
                                        echo "<td>" . $row['Gender'] . "</td>";
                                        echo "<td>" . $row['Levels'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="N_update.php?id='. $row['Id'] .'" class="me-3" ><span class="bi bi-pencil" id="edit">Add Note</span></a>';
                                        echo "</td>";

                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            /* Free result set */
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No student in this class</em></div>';
                        }
                    } else{
                        echo "Oops! An error has occurred.";
                    }
 
                    /* Fermer connection */
                    mysqli_close($link);
                    ?>
      </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
          </a>

        </div>

       

        </div>

      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

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