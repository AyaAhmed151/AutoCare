<?php include('db.php');

$user_data = check_user_login();
$user_id = $user_data['user_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Full Information</title>
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

<body id="full-info-carbody">



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
        <li><a href="mech-order.php">Get Mechanical</a></li>
        <li class="active"><a href="profile.php">My Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul> 
  </div>
</header>
<!-- End Header -->
<br> <br>


<section class="full-car">
<div class="container">
<div class="row">
<div class="col-lg-12">


<form  method="POST">
<h2>Add Balance To Your Account</h2>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $added_balance = $_POST['money'];
        $total_balance = $added_balance + $user_data['balance'];

        $db= mysqli_connect("localhost", "root", "", "car");

        $query = "update customer set balance = '$total_balance' where user_id = '$user_id'";
        $result = mysqli_query($db, $query);

        if($result) {
            echo "successfully added your balance";
        } else {
            echo "error adding your balance, try again later";
        }
    }
?>
<br>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <label for="fname">Name on Card:</label>
            <input type="text" id="fname" name="type" ><br><br>
        </div>

        <div class="col-lg-6">
            <label for="area">Card Number:</label>
            <input type="number" id="area" name="description" ><br><br> 
        </div>
  
        <div class="col-lg-6">
            <label for="car-malf">MM:</label>
            <input type="number" id="car-malf" name="amount" ><br><br>
        </div>

        <div class="col-lg-6">
            <label for="car-malf">YY:</label>
            <input type="number" id="car-malf" name="price" ><br><br>
        </div>

        <div class="col-lg-6">
            <label for="car-malf">CVV:</label>
            <input type="number" id="car-malf" name="color" ><br><br>
        </div>


        <div class="col-lg-6">
            <label for="car-malf">Money Amount:</label>
            <input type="number" id="car-malf" name="money"><br><br>
        </div>

        <div class="col-lg-12">
            <button type="submit" name="order" class="btn btn-dark"> Submit</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</section>

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

<script>

</script>



</body>
</html>