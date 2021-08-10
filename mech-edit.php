
<?php include('db.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update</title>
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

   
   <!-- MDB -->
   <link rel="stylesheet" href="assets/css/mdb.min.css" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?v=<?php echo time();?>" rel="stylesheet">
  
</head>
<body class="mech-body">


<section id="mech-edit">
<div class="container">
<div class="row">
<div class="col-lg-6">

<?php
          $db= mysqli_connect("localhost", "root", "", "car");
            
          
            if(isset($_POST['show'])){
                $id=$_POST['edit_id'];
                $query="SELECT * FROM Mechanical ";
                $result=mysqli_query($db,$query);

            while($row = mysqli_fetch_array($result));
           
              {
              ?>


<form action="db.php" method="POST">  

        <div class="form-group">
     <input type="text" name="edit_id" value="<?php echo $row['mechid']?>">
 <!--update Name  -->
 <div class="form-outline mb-4" id="bg-input">
          <input type="text" id="registerName" name="update-mech-name" value="<?php echo $row['mech_name']?>" class="form-control"/>
          <label class="form-label" for="registerName">Your FuLL Name...</label>
        </div>
        
  <!--update Address  -->
  <div class="form-outline mb-4" id="bg-input">
          <input type="text" id="registerEmail" name="update-mech-address" value="<?php echo $row['address']?>" class="form-control"/>
          <label class="form-label" for="registerEmail">Your Address...</label>
        </div>


 <!-------------update-Specialization----------------->
 <div class="form-group" id="form-g">
 <select class="form-control" id="mech-spec" placholder="select" name="update-mech-spec" value="<?php echo $row['specialization']?>">
            <option value="Select your Specialization" selected> Select your Specialization
            </option>
            <option value="Italian Car Specialist">Italian Car Specialist
            </option>
            <option value="Chinese Car Specialist">Chinese Car Specialist
            </option>
            <option value="American Car Specialist">American Car Specialist
            </option>
            <option value="British Car Specialist">British Car Specialist
            </option>
            <option value="French Car Specialist">French Car Specialist
            </option>
            <option value="Japanese Car Specialist">Japanese Car Specialist
            </option>
            <option value="Korean Car Specialist">Korean Car Specialist
            </option>
            <option value=" German Car Specialist">German Car Specialist
            </option>
            <option value=" Malaysian Car Specialist">Malaysian Car Specialist
            </option>

        </select>
       
    </div>
    
    <br>
<!-------Covered Area--------->
<div class="" id="covered-area">
            <select class="form-control" id="mech-area" name="update-mech-area" value="<?php echo $row['covered_area']?>">
                <option value="Select Your Area" selected>Select your Area</option>
                <option value="Cairo">Cairo</option>
                <option value="Giza">Giza</option>
                <option value="ALexandria">ALexandria</option>
                <option value="Shubra el-khema">Shubra el-khema</option>
                <option value="EL-Mansoura">EL-Mansoura</option>
                <option value="Hurghada">Hurghada</option>
                <option value="Marsa Matruh">Marsa Matruh</option>
                <option value="Aswan">Aswan</option>

            </select>
        </div>

     <!-----------------------update photo--------------------------->
     <label for="formFileLg" class="form-label">Your Profile</label>
          <input class="form-control form-control-lg" name="update-mech-image" value="" id="formFileLg" type="file" />  
          <br>
       

<!-- Submit button -->
<button type="button" name="show" class="btn btn-success btn-rounded">show </button>

<button type="submit" name="mech-update" class="btn btn-success btn-rounded">Update </button>
<button type="button" class="btn btn-danger btn-rounded"><a href="mech-Page.php">Cancel</a></button>
</div>
</form>

</div>
<?php

        }
    }
    
?>
<!--<div class="col-lg-6 pt-4 pt-lg-0">
            <img src="img/update.png" alt="">
          </div>-->
</div>

</div>

</section>

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