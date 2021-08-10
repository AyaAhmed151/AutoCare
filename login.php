<?php
session_start();

    include("connection.php");
    include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Recruitment Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.html">
      <img src="img/logo.png"> 
    </a></h1>
    
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Buy Cars</a></li>
        <li><a href="shop2.php">Sell Cars</a></li>
        <li><a href="quick-winch.php">Quick Winch</a></li>
        <li><a href="quick-mech.php">Quick Mechanical</a></li>
        <li class="active"><a href="login.php">Login</a></li>
      </ul> 
  </div>
</header><!-- End Header -->

    <section style="margin-top: 100px;">
    <div class="container mt-3" style="max-width: 400px;"><br>
        <h3>LOGIN</h3>
        <form method="post" class="needs-validation" novalidate>
          <div class="form-group">
          <input type="email" class="form-control bg-black" id="email" placeholder="Email" name="email" required>
          </div>
          <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          </div>
        
        <button type="submit" class="btn btn-primary">Login</button>
        dont have account yet? <a href="signup.php">signup</a>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                //something was posted
                $email = $_POST['email'];
                $password = $_POST['password'];
        
                $salt1 = "qm&h*";
                $salt2 = "pg!@";
                $hashed_password = hash('ripemd128', "$salt1$password$salt2"); //hashing the plain text password
        
                if(!empty($email) && !empty($password)) {
                    //read from database
                    $query = "select * from users where email = '$email' limit 1";
        
                    $result = mysqli_query($con, $query);
        
                    if($result) {
                        if($result && mysqli_num_rows($result) > 0) {
                            $user_data = mysqli_fetch_assoc($result);
                            if($user_data['password'] === $hashed_password) {
                                $_SESSION['user_id'] = $user_data['user_id'];
                                header('Location: index-guest.php');
                                // if($user_data['user_role'] === 'freelancer') {
                                    
                                // } else if($user_data['user_role'] === 'client') {
                                //     header('Location: index-client.php');
                                // } else if($user_data['user_role'] === 'admin') {
                                //     header('Location: index-admin.php');
                                // }
                                die;
                            }
                        }
                    }
        
                    echo "Wrong username or password!";
                }else {
                    echo "Please enter some valid information!";
                }
            }
        ?>
        </form>
    </div>
    </section>

    <script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
                }, false);
            });
            }, false);
        })();
    </script>
</body>
</html>