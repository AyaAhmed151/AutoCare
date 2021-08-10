<?php include('db.php');

$user_data = check_user_login();

?>

<?php

$db= mysqli_connect("localhost", "root", "", "car");

if (isset($_POST['order'])){
    $seller_name=$user_data['name'];
    $seller_phone=$user_data['phone'];
    $type=mysqli_real_escape_string($db,$_POST['type']);
    $description=mysqli_real_escape_string($db,$_POST['description']);
    $amount=mysqli_real_escape_string($db,$_POST['amount']);
    $price=mysqli_real_escape_string($db,$_POST['price']);
    $color=mysqli_real_escape_string($db,$_POST['color']);
    $status=mysqli_real_escape_string($db,$_POST['status']);
    $km=mysqli_real_escape_string($db,$_POST['km']);
    $brand=mysqli_real_escape_string($db,$_POST['brand']);
    $model=mysqli_real_escape_string($db,$_POST['model']);

    $target_dir = "img/";
    $target_file = $target_dir . time() . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $car_pic = time() . basename($_FILES["fileToUpload"]["name"]);
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    if(empty($type)){
       $type_error="Type is required";

    }

    if(empty($description)){
        $desc_error="description is required";
     }

     if(empty($amount)){
      $amount_error="Amount is required";
   }

     if(empty($price)){
    $price_error="Price is required";
     }

     if(empty($color)){
     $color_error="Color is required";
      }

      if(empty($status)){
        $status_error="Status is required";
         }

         if(empty($km)){
          $km_error="Km is required";
           }


           if(empty($brand)){
            $brand_error="Brand is required";
             }

             if(empty($model)){
              $model_error="Model is required";
               }

    //  if(empty($car_pic)){
    //     $image_error="Image is required";
    //  }else{
    //     header('location:shop-car.php');
    // }

    header('location:shop-car.php');
      /* insert into   */ 
    $sql="INSERT INTO Car (seller_name,seller_phone,type,description,amount,price,color,status,km,brand,model,image) VALUES ('$seller_name','$seller_phone','$type', '$description', '$amount', '$price', '$color', '$status','$km','$brand','$model','$car_pic') ";
    $query= mysqli_query($db, $sql);
    }
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
        <li class="active"><a href="shop2.php">Sell Cars</a></li>
        <li><a href="winch-order.php">Get Winch</a></li>
        <li><a href="mech-order.php">Get Mechanical</a></li>
        <li><a href="profile.php">My Profile</a></li>
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


<form  method="POST" enctype="multipart/form-data">
<h2>Set Your Car Information here to sell it..</h2>
<br>

<div class="container">
  <div class="row">
    <div class="col-lg-6">
<label for="fname"> Type:</label>
  <input type="text" id="fname" name="type" ><br><br>
  <p class="error" style="color:red;"><?php if(isset($type_error)){ 
 echo $type_error;} ?>
   </p>
   </div>

   <div class="col-lg-6">
  <label for="area">Description:</label>
  <input type="text" id="area" name="description" ><br><br> 

  <p class="error" style="color:red;"><?php if(isset($desc_error)){ 
 echo $desc_error;} ?>
   </p>
   </div>
  
   
<div class="col-lg-6">
  <label for="car-malf">Amount:</label>
  <input type="text" id="car-malf" name="amount" ><br><br>

  <p class="error" style="color:red;"><?php if(isset($amount_error)){ 
 echo $amount_error;} ?>
   </p>
   </div>

   <div class="col-lg-6">
   <label for="car-malf">Price:</label>
  <input type="text" id="car-malf" name="price" ><br><br>

  <p class="error" style="color:red;"><?php if(isset($price_error)){ 
 echo $price_error;} ?>
   </p>
   </div>

   <div class="col-lg-12">
   <label for="car-malf">Color:</label>
  <input type="text" id="car-malf" name="color" ><br><br>

  <p class="error" style="color:red;"><?php if(isset($color_error)){ 
 echo $color_error;} ?>
   </p>
   </div>


   <div class="col-lg-12">
   <label for="car-malf">Status:</label>
  <input type="text" id="car-malf" name="status"><br><br>

  <p class="error" style="color:red;"><?php if(isset($status_error)){ 
 echo $status_error;} ?>
   </p>
   </div>


   <div class="col-lg-12">
   <label for="car-malf">Km:</label>
  <input type="text" id="car-malf" name="km" ><br><br>

  <p class="error" style="color:red;"><?php if(isset($km_error)){ 
 echo $km_error;} ?>
   </p>
   </div>


   <div class="col-lg-12">
   <label for="car-malf">Brand:</label>
  <input type="text" id="car-malf" name="brand" ><br><br>

  <p class="error" style="color:red;"><?php if(isset($brand_error)){ 
 echo $brand_error;} ?>
   </p>
   </div>


   <div class="col-lg-12">
   <label for="car-malf">Model:</label>
  <input type="text" id="car-malf" name="model" ><br><br>

  <p class="error" style="color:red;"><?php if(isset($model_error)){ 
 echo $model_error;} ?>
   </p>
   </div>

   <div class="col-lg-12">
   <label for="fileToUpload" class="form-label">Picture of Car</label>
          <input class="form-control form-control-lg" name="fileToUpload" id="fileToUpload" type="file" />  <br><br>
          <p class="error" style="color:red;"><?php if(isset($image_error)){ 
 echo $image_error;} ?>
   </p>
   </div>

<br>
<br>
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