<?php include('db.php')?>
<?php
if (isset($_POST['order'])){
    $name=mysqli_real_escape_string($db,$_POST['name']);
    $area=mysqli_real_escape_string($db,$_POST['area']);
    $car_malf=mysqli_real_escape_string($db,$_POST['car-malf']);

    if(empty($name)){
       $name_error="name is required";

    }

    if(empty($area)){
        $area_error="area is required";
        
     }

     if(empty($car_malf)){
        $car_error="car is required";
     }else{
      header('location:mech-done.php');
  }
    }
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


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   
   <link rel="stylesheet" href="assets/css/mdb.min.css" />
  <!-- Main CSS File -->
  <link href="assets/css/style.css?v=<?php echo time();?>" rel="stylesheet">
  
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
<br>



<!---------------------Call Winch------------------------>

<section class="user-map">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
          <h2>Get Quick Mechanical</h2>
          <a href="mech-order.php">or choose your prefered mechanical</a>
        </div>
<h2>Your Location</h2>
</div>
</div>
</div>
<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Cairo+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
  <br>
  <section id="cta" class="cta">

      <div class="container" data-aos="zoom-in">
        <div class="text-center">
          <h3>Ask For Mechanical Now !</h3>
          <p> Enter Your Location Please and then you will see the price </p>


 <section class="set-user-location">
<div class="container">
<div class="row">
<div class="col-lg-12">


<form  method="POST">

<label class="name" for="fname">Your Name:</label>
  <input type="text" id="fname" name="name" >
   <p class="error" style="color:red;"><?php if(isset($name_error)){ 
 echo $name_error;} ?>
 </p>
  <br><br>
  

<label class="area" for="area">Your Area:</label>
<input type="text" id="area" name="area">
<p class="error" style="color:red;"><?php if(isset($area_error)){ 
 echo $area_error;} ?>
   </p>
<br><br> 



<label class="carmalf" for="car-malf">Cause of malfunction:</label>
<input type="text" id="car-malf" name="car-malf" >
<p class="error" style="color:red;"><?php if(isset($car_error)){ 
 echo $car_error;} ?>
   </p>
<br><br>


<div class="col-lg-12">
<button type="button" name="btn-calc" class="class" class="btn btn-warning" onclick="getLocation()">Click here to know your address automatically</button>
<div class="alert alert-secondary" role="alert">
<strong><p id="demo"></p></strong> </div>
</div>

<button type="submit" name="order" class="btn btn-success">Order</button>


</form>
</div>
</div>
</div>
  

    </section><!-- End Cta Section -->


<!-------------------------------------->

  
   
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


function calculate() {
    //get selected values
    var area = $("#area").val();
    var car = $("#car").val();

    //get sum of values
    var result = parseFloat(area) + parseFloat(car);

    //put sum to result
    $("#result").val("$" + result + "+ Winch Fees");
}

$(document).ready(function(){
    $(document).on("change", "#area,#car", function (e) {
        calculate();
    });
});




//Geolocation

var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "your coordinates is: " + position.coords.latitude +  position.coords.longitude;
}


     
   </script>
</body>
</html>