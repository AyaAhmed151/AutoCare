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

  <title>As a Mechanical</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
 
  
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
  <link href="assets/css/style.css?v=<?php echo time();?>" rel="stylesheet">
  

  
</head>

<body>

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-6 d-flex align-items-stretch mt-4 mt-md-0" id="new" class="info" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box iconbox-orange " id="bg-mech">
               <!-- Pills navs -->
               <div class="section-title">
                <h2 class="top-text"> Mechanical Login</h2>
              </div>
      
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a
      >
    </li>
    <li class="nav-item"  role="presentation">
      <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
    </li>
  </ul>
  <!-- Pills navs -->
  
  <!-- Pills content -->
  <div class="tab-content">
    <div
      class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
      
      <form action="db.php" method="POST">

        <!-- Email input -->
        <div class="form-outline mb-4" id="bg-input">
          <input type="email" id="loginEmail" name="mech-email" class="form-control" required/>
          <label class="form-label" for="loginEmail"> Email</label>
        </div>
  
        <!-- password input -->
        <div class="form-outline mb-4" id="bg-input">
          <input type="password" id="loginPassword" name="mech-password" class="form-control" required/>
          <label class="form-label" for="loginPassword">Password</label>
        </div>
         
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4" name="mech-login" id="sign" >Sign in</button>
        <a href="first.php">Back to Choose</a>

        <!-- Register buttons -->
        
      </form>
    </div>
    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">

      <form action="db.php" method="POST" enctype="multipart/form-data">
  
        <!-- Name input -->
        <div class="form-outline mb-4" id="bg-input">
          <input type="text" id="registerName" name="mech-name" class="form-control" required/>
          <label class="form-label" for="registerName">Your Name...</label>
        </div>

         <!-- email input -->
         <div class="form-outline mb-4" id="bg-input">
          <input type="email" id="registerEmail" name="mech-email" class="form-control" required/>
          <label class="form-label" for="registerEmail">Your Email...</label>
        </div>


         <!-- password input -->
         <div class="form-outline mb-4" id="bg-input">
          <input type="password" minlength="8" id="registerPassword" name="mech-password" class="form-control" required/>
          <label class="form-label" for="registerPassword">Your Password...</label>
        </div>

        <!-- Phone input -->
        <div class="form-outline mb-4" id="bg-input">
          <input type="number" minlength="11" id="registerPhone" name="user-phone" class="form-control" required/>
          <label class="form-label" for="registerPhone"> Your Phone...</label>
        </div>
  
        <!-- Fees input -->
        <div class="form-outline mb-4" id="bg-input">
          <input type="number" min="0" max="1000" id="registerFees" name="mech-fees" class="form-control" required />
          <label class="form-label" for="registerFees">Your Fees...</label>
        </div>
       
        <!-- Address input -->
        <div class="form-outline mb-4" id="bg-input">
          <input type="text" id="registerAddress" name="mech-address" class="form-control" required />
          <label class="form-label" for="registerAddress">Your Address...</label>
        </div>


        <!-------Covered Area--------->
        <div class="form-group" id="covered-area">
            <select class="form-control" id="mech-area" name="cover-area">
                <option value="Select Your Area" selected>Select your Area</option>
                <option value="Cairo - Alexandria Desert Road">Cairo - Alexandria Desert Road</option>
                <option value="Suez Road">Suez Road</option>
                <option value="Ismailia Desert Road">Ismailia Desert Road</option>
            </select>
        </div>
        
    <!--------------Specialization----------------->
    <div class="form-group" id="form-g">
        <select class="form-control" id="mech-spec" placholder="select" name="spec">
            <option value="Select your Specialization" selected> Select your Specialization
            </option>
            <option value="Italian Car Specialist">Italian Car 
            </option>
            <option value="Chinese Car Specialist">Chinese Car 
            </option>
            <option value="American Car Specialist">American Car 
            </option>
            <option value="British Car Specialist">British Car 
            </option>
            <option value="French Car Specialist">French Car
            </option>
            <option value="Japanese Car Specialist">Japanese Car 
            </option>
            <option value="Korean Car Specialist">Korean Car 
            </option>
            <option value=" German Car Specialist">German Car 
            </option>
            <option value=" Malaysian Car Specialist">Malaysian Car
               
            </option>

        </select>
    </div>
    <label for="fileToUpload" class="form-label">Your Profile Picture</label>
          <input class="form-control form-control-lg" name="fileToUpload" id="fileToUpload" type="file" />  
          <br>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-3" name="sign-up" id="sign">Sign in</button>
        <a href="first.php">Back to Choose</a>
         
      </form>
    </div>
  </div>
  <!-- Pills content -->
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Sevices Section -->


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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  </body>
</html>