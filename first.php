<?php 
include('db.php');

  $user_data = check_user_login();
  $mech_data = check_mech_login();
  $winch_data = check_winch_login();

  if($user_data) {
      return header('Location: index-user.php');
  } else if ($mech_data) {
      return header('Location: index-mech.php');
  } else if ($winch_data) {
      return header('Location: index-winch.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Who You Are</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">



    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/mdb.min.css" />
    <!-- Main CSS File -->
    <link href="assets/css/first-page.css?v=<?php echo time();?>" rel="stylesheet">
</head>

<body class="first-page">

    <div class="d-flex justify-content-center">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="wrapper">
                    <div class="title">Who You Are!</div>
                    <div class="box">
                        <input type="radio" name="select" id="option-1">
                        <input type="radio" name="select" id="option-2">
                        <input type="radio" name="select" id="option-4">
           
                    <label for="option-1" class="option-1">
                        <div class="dot"></div>
                        <div class="text"><a href="user-reg.php">  User</a></div>
                    </label>

                    <label for="option-2" class="option-2">
                        <div class="dot"></div>
                        <div class="text"> <a href="mech-reg.php"> Mechanical</a></div>
                    </label>


                    <label for="option-4" class="option-4">
                        <div class="dot"></div>
                        <div class="text"> <a href="winch-reg.php"> Winch</a></div>
                    </label>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>


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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>