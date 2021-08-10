<?php 
include('db.php');

  $user_data = check_user_login();
  $mech_data = check_mech_login();
  $winch_data = check_winch_login();

  if ($user_data) {
      return header('Location: index-user.php');
  } else if ($winch_data) {
      return header('Location: index-winch.php');
  } else if (!$mech_data) {
    return header('Location: first.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mechanical</title>
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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

   
   <link rel="stylesheet" href="assets/css/mdb.min.css" />
  <!-- Main CSS File -->
  <link href="assets/css/style.css?v=<?php echo time();?>" rel="stylesheet">
  
</head>

<body class="mech-body">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.php">
      <img src="img/logo.png"> 
    </a></h1>
    
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="mech-orders.php">My Orders</a></li>
        <li  class="active"><a href="profile.php">My Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul> 
  </div>
</header><!-- End Header -->


<form action="db.php" method="POST" enctype="multipart/form-data">
<section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row ">

      <div class="col-12">
        <div class="card" id="card-mech">
          <div class="card-body">
            <p class="card-text">
              <ul>
             
            <div class="placeholder">
            <h4>"Your information"</h4>
            </div>

              <h5><li> Name: <?php echo $mech_data['mech_name']; ?></li></h5> 

              <h5><li>Email: <?php echo $mech_data['email']; ?></li></h5>
                

               <h5> <li>Address: <?php echo $mech_data['address']; ?></li></h5>

                <h5><li>Area: <?php echo $mech_data['covered_area']; ?></li></h5>

                <h5><li>Specialization: <?php echo $mech_data['specialization']; ?></li></h5>

                <h5><li>Fees: $<?php echo $mech_data['fees']; ?></li></h5>

                <h5><li>Balance: $<?php echo $mech_data['balance']; ?></li></h5>

              </ul>
            </p>
            <img src=<?php echo "./img/". $mech_data['image']; ?> alt="mech-image" style="width: 500px; margin: 0;">
            <!-- <button type="submit"  class="btn btn-light btn-rounded"> <a href="mech-edit.php">Edit</a>  </button> -->
            </div>          
        </div>
      </div>
      </section>

            </form>
            

 <!-- ======= Footer ======= -->
 <footer id="footer">
 
  <div class="footer-top">
    <div class="container">
      <div class="row">
  
        <div class="col-lg-3 col-md-6 footer-contact">
        <img src="img/logo.png" alt="">
          <p>
           Nasr City Abbas El-Akkad<br><br>
           
           <strong>Phone:</strong> +01288996784<br>
           <strong>Email:</strong> saviors@gmail.com<br>
         </p>
        </div>
  
        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right "></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Requests</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Set Fees</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
          </ul>
        </div>
  
        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Set Fees</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Update Status</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
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
   <script type="text/javascript">
  
  </script>
 
   <!-- Main JS File -->
   <script src="assets/js/main.js"></script>
  
<script>

</script>

    </body>
  
  </html>
 
 