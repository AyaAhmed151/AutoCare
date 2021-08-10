<?php include('db.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shop Car</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="assets/css/style.css?v=<?php echo time();?>" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.html">
      <img src="img/logo.png"> 
    </a></h1>
    
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="shop.php">Buy Cars</a></li>
        <li><a href="shop2.php">Sell Cars</a></li>
        <li><a href="quick-winch.php">Quick Winch</a></li>
        <li><a href="quick-mech.php">Quick Mechanical</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul> 
  </div>
</header><!-- End Header -->
  <br> <br>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Car Details</h2>
          <p>(Contact us: 0106 426 5242) => for more info or to buy anything</p>
          <ol>
            <li><a href="shop.php">Back to Buy Cars</a></li>
            
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->

   
    <section id="portfolio-details" class="portfolio-details shop1">
    <?php
          $db= mysqli_connect("localhost", "root", "", "car");

          $query="SELECT * FROM Car ";

          $result=mysqli_query($db,$query);
          $check_mech =mysqli_num_rows($result)>0;
          
          if($check_mech){
            while($row = mysqli_fetch_array($result))
            {

              ?>
      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">    
          <img src="img/<?php echo $row['image']; ?>" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Car information</h3>
            <ul>
              <li><strong>Type</strong>:<?php echo $row['type']; ?></li>
              <li><strong>Amount</strong>: <?php echo $row['amount']; ?></li>
              <li><strong>Price</strong>:<?php echo $row['price']; ?></li>
              <li><strong>Color</strong>:<?php echo $row['color']; ?></li>
              <li><strong>Status</strong>:<?php echo $row['status']; ?></li>
              <li><strong>Km</strong>:<?php echo $row['km']; ?></li>
              <li><strong>Brand</strong>:<?php echo $row['brand']; ?></li>
              <li><strong>Model</strong>:<?php echo $row['model']; ?></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Description Of Car</h2>
          <p>
          <?php echo $row['description']; ?>          </p>

          <!-- <button type="button" class="btn btn-info">Contact Seller</button> -->
        </div>

      </div>

      <?php

                   
}
}
?>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
 
 <div class="footer-top">
   <div class="container">
     <div class="row">
 
       <div class="col-lg-4 col-md-6 footer-contact">
       <img src="img/logo.png">
         <p>
           Nasr City abbas El-akkad<br><br>
           
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>