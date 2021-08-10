<?php 
include('db.php');

$mech_data = check_mech_login();
$mech_name = $mech_data['mech_name'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mech Orders</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

   
   
   <link rel="stylesheet" href="assets/css/mdb.min.css" />
  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.php">
      <img src="img/logo.png"> 
    </a></h1>
    
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="mech-orders.php">My Orders</a></li>
        <li><a href="profile.php">My Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul> 
  </div>
</header><!-- End Header -->



<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg mt-5">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Your Current Customers</h2>
          <!-- <a href="quick-mech.php">or get quick mechanical</a> -->
        </div>

        <div class="row">
          <?php
          $db= mysqli_connect("localhost", "root", "", "car");

            $query = "select * from mech_orders where mech_name = '$mech_name'";
            $result = mysqli_query($db, $query);

          $check_mech =mysqli_num_rows($result)>0;
          
          if($check_mech){
            while($row = mysqli_fetch_array($result))
            {

              ?>
               <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <form method="post">
                    <div class="member">
                        <div class="member-info">
                            <h4>Name: <?php echo $row['user_name'] ?></h4>
                            <h4>Phone: 0<?php echo $row['user_phone'] ?></h4>
                            <h4>description: <br><?php echo $row['description'] ?></h4>
                        </div>
                    </div>
                </form>
                </div>
                <!-- Collapsed content -->

             

              <?php

                   
            }
          }
      ?>
      
       </section> 


       <footer id="footer">
 
 <div class="footer-top">
   <div class="container">
     <div class="row">
 
       <div class="col-lg-4 col-md-6 footer-contact">
       <img src="img/logo.png">
         <p>
           Nasr City Abbas El-Akkad<br><br>
           
           <strong>Phone:</strong> +01288996784<br>
           <strong>Email:</strong> saviors@gmail.com<br>
         </p>
       </div>
 
       <div class="col-lg-4 col-md-6 footer-links">
         <h4>Useful Links</h4>
         <ul>
           <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
         </ul>
       </div>
 
       <div class="col-lg-4 col-md-6 footer-links">
         <h4>Our Services</h4>
         <ul>
         <li><i class="bx bx-chevron-right"></i> <a href="#">Select Mechanical</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Select Winch</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Sell & Buy Cars</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Sell & Buy Spare Cars</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>

         </ul>
       </div>
 
 
     </div>
   </div>
 </div>
 
 <div class="container d-md-flex py-4">
 
   <div class="mr-md-auto text-center text-md-left">
     <div class="copyright">
       &copy; Copyright <strong><span><img src="img/logo.png" alt=""></span></strong>. All Rights Reserved
     </div>
   </div>
   <div class="social-links text-center text-md-right pt-3 pt-md-0">
     <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
     <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
     <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
     <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
     <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
   </div>
 </div>
 </footer><!-- End Footer -->
 
 <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
 <div id="preloader"></div>
      
                
 <!-- Vendor JS Files -->
 <script src="assets/vendor/jquery/jquery.min.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>
 <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
 <script src="assets/vendor/counterup/counterup.min.js"></script>
 <script src="assets/vendor/venobox/venobox.min.js"></script>
 <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/aos/aos.js"></script>


 <script type="text/javascript" src="assets/js/mdb.min.js"></script>
 <!-- Custom scripts -->
 <script type="text/javascript"></script>

 <!-- Main JS File -->
 <script src="assets/js/main.js"></script>
 <script>

   
 </script>