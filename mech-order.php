<?php include('db.php');

$user_data = check_user_login();
$user_id = $user_data['user_id'];
$user_name = $user_data['name'];
$user_phone = $user_data['phone'];

$db= mysqli_connect("localhost", "root", "", "car");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Quick Mechanical</title>
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
        <li><a href="shop.php">Buy Cars</a></li>
        <li><a href="shop2.php">Sell Cars</a></li>
        <li><a href="winch-order.php">Get Winch</a></li>
        <li class="active"><a href="mech-order.php">Get Mechanical</a></li>
        <li><a href="profile.php">My Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul> 
  </div>
</header><!-- End Header -->



<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg mt-5">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Select Mechanical</h2>
          <!-- <a href="quick-mech.php">or get quick mechanical</a> -->
          <?php
          if($_SERVER['REQUEST_METHOD'] == "POST") {
            $mech_id = $_POST['mech_id'];
            $mech_name = $_POST['mech_name'];
            $mech_fees = $_POST['mech_fees'];
            $mech_balance = $_POST['mech_balance'];
            $description = $_POST['description'];
            $client_money_after = $user_data['balance'] - $mech_fees;
            $mech_money_after = $mech_balance + $mech_fees;

            if($user_data['balance'] >= $mech_fees) {
              $client_money_query = "update customer set balance = '$client_money_after' where user_id = '$user_id'";
              $client_result = mysqli_query($db, $client_money_query);

              $mech_money_query = "update mechanical set balance = '$mech_money_after' where user_id = '$mech_id'";
              $mech_result = mysqli_query($db, $mech_money_query);

              $query = "insert into mech_orders (user_name,user_phone,description,mech_name) values ('$user_name','$user_phone','$description','$mech_name')";
              $result = mysqli_query($db, $query);
  
              if($result) {
                echo "Successfully ordered your mech";
              } else {
                echo "Failed to ordered your mech";
              }
            } else {
              echo "sorry, you don't have enough money to order this!";
            }

          }
          ?>
        </div>

        <div class="row">
          <?php
          $db= mysqli_connect("localhost", "root", "", "car");

          $query="SELECT * FROM Mechanical ";

          $result=mysqli_query($db,$query);
          $check_mech =mysqli_num_rows($result)>0;
          
          if($check_mech){
            while($row = mysqli_fetch_array($result))
            {

              ?>
               <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <form method="post">
                    <div class="member">
                  <div class="member-img">
                    <img src="img/<?php echo $row['image']; ?>" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="icofont-twitter"></i></a>
                      <a href=""><i class="icofont-facebook"></i></a>
                      <a href=""><i class="icofont-instagram"></i></a>
                      <a href=""><i class="icofont-linkedin"></i></a>
                    </div>
                  </div>

                  <div class="member-info">
                    <h4><?php echo "Name: " .$row['mech_name']; ?></h4>
                    <span> <h4><?php echo "Specialization: " .$row['specialization']; ?> </h4></span>
                    <span><h4><?php echo "Area: " .$row['covered_area']; ?></h4></span>
                    <h4> <?php echo "Fees : $ " . $row['fees'] ; ?></h4>

                    <div class="rate">
                      <div class="fa fa-star checked"></div>
                      <div class="fa fa-star checked"></div>
                      <div class="fa fa-star checked"></div>
                      <div class="fa fa-star checked"></div>
                      <div class="fa fa-star"></div>
                    </div>
                    <input type="hidden" name="mech_name" value=<?php echo $row['mech_name']; ?>>
                    <input type="hidden" name="mech_fees" value=<?php echo $row['fees']; ?>>
                    <input type="hidden" name="mech_balance" value=<?php echo $row['balance']; ?>>
                    <input type="hidden" name="mech_id" value=<?php echo $row['user_id']; ?>>
                    <textarea type="text" cols="30" rows="5" name="description" placeholder="what you want from mech?" style="background-color:#ddd; font-size: 0.8rem; margin: 10px 0;"></textarea>
                    <button type="submit" class="btn btn-dark btn-rounded">Order Now</button>
                    
                  
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