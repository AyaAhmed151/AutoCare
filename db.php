<?php
session_start();

$db= mysqli_connect("localhost", "root", "", "car");

function check_user_login() {
    if(isset($_SESSION['user_id'])) {
        // $user_data = "data with a session";
        // return $user_data; 
        $user_id = $_SESSION['user_id'];
        
        $db= mysqli_connect("localhost", "root", "", "car");
        
        $query = "select * from customer where user_id = '$user_id' limit 1";
        $result = mysqli_query($db, $query);

        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    //redirect to guest index
    // header('Location: index-guest.php');
    // $user_data = ["user_role" => "guest",];
    // $user_data = "guest";
    return false;
    // die;
}

function check_mech_login() {
    if(isset($_SESSION['user_id'])) {
        // $user_data = "data with a session";
        // return $user_data; 
        $user_id = $_SESSION['user_id'];
        
        $db= mysqli_connect("localhost", "root", "", "car");
        
        $query = "select * from mechanical where user_id = '$user_id' limit 1";
        $result = mysqli_query($db, $query);

        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    //redirect to guest index
    // header('Location: index-guest.php');
    // $user_data = ["user_role" => "guest",];
    // $user_data = "guest";
    return false;
    // die;
}

function check_winch_login() {
    if(isset($_SESSION['user_id'])) {
        // $user_data = "data with a session";
        // return $user_data; 
        $user_id = $_SESSION['user_id'];
        
        $db= mysqli_connect("localhost", "root", "", "car");
        
        $query = "select * from rescue_winch where user_id = '$user_id' limit 1";
        $result = mysqli_query($db, $query);

        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result); 
            return $user_data;
        }
    }
    //redirect to guest index
    // header('Location: index-guest.php');
    // $user_data = ["user_role" => "guest",];
    // $user_data = "guest";
    return false;
    // die;
}

function random_num($length) {
    $text = "";
    if($length < 5) { $length = 5; }

    $len = rand(4, $length);

    for($i=0; $i < $len; $i++) {
        $text .= rand(0,9);
    }

    return $text;
}

//user-signup
if(isset($_POST['user-submit'])){
    $user_id = random_num(20);
    $name= mysqli_real_escape_string($db,$_POST['username']);
    $email= mysqli_real_escape_string($db,$_POST['email']);
    $password= mysqli_real_escape_string($db,$_POST['password']);
    $phone= mysqli_real_escape_string($db,$_POST['user-phone']);
    $user_address= mysqli_real_escape_string($db,$_POST['user-address']);  
    $car_model= mysqli_real_escape_string($db,$_POST['car-model']); 
    $brand_car= mysqli_real_escape_string($db,$_POST['brand-car']); 
    $gender= mysqli_real_escape_string($db,$_POST['gender']); 
   
    
    $sql="INSERT INTO customer(user_id,name,email,password,phone,address,car_model,brand_car,gender) VALUES('$user_id','$name','$email','$password','$phone','$user_address','$car_model', '$brand_car', '$gender')";

    $query= mysqli_query($db, $sql);
    if($query) {
        $_SESSION['user_id'] = $user_id;
        header('location:index.php'); 
    }
  }

  //user-login 
  if(isset($_POST['login'])){
    $email_login= mysqli_real_escape_string($db,$_POST['email']);
    $password_login= mysqli_real_escape_string($db,$_POST['password']);
   

    $query="SELECT * FROM customer WHERE email='$email_login' AND password='$password_login'";
    $result=mysqli_query($db,$query);
    if($result) {
        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $user_data['user_id'];
            header('Location: index.php');
            die;
        }
    }
    echo "Wrong username or password!";
}

//mechanical reg
$msg="";
$css_class="";
if(isset($_POST['sign-up'])){
    $user_id = random_num(20);
    $mech_name= mysqli_real_escape_string($db,$_POST['mech-name']);
    $mech_email= mysqli_real_escape_string($db,$_POST['mech-email']);
    $mech_password= mysqli_real_escape_string($db,$_POST['mech-password']);
    $mech_address= mysqli_real_escape_string($db,$_POST['mech-address']);  
    $covered= mysqli_real_escape_string($db,$_POST['cover-area']); 
    $specialization= mysqli_real_escape_string($db,$_POST['spec']);
    $mech_fees= mysqli_real_escape_string($db,$_POST['mech-fees']);

    $target_dir = "img/";
    $target_file = $target_dir . time() . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $profile_pic = time() . basename($_FILES["fileToUpload"]["name"]);
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    

    $sql="INSERT INTO Mechanical (user_id,mech_name,email,password,fees,address,covered_area,specialization,image) VALUES ('$user_id', '$mech_name', '$mech_email', '$mech_password', '$mech_fees', '$mech_address', '$covered', '$specialization', '$profile_pic') ";
    $query= mysqli_query($db, $sql);

    if($query) {
        $_SESSION['user_id'] = $user_id;
        header('location:index.php'); 
    }
}


//mechanical login
if(isset($_POST['mech-login'])){
    $mech_email_login= mysqli_real_escape_string($db,$_POST['mech-email']);
    $mech_password_login= mysqli_real_escape_string($db,$_POST['mech-password']);  

    $query="SELECT * FROM mechanical WHERE email='$mech_email_login' AND password='$mech_password_login'";
    $result=mysqli_query($db,$query); 
    if($result) {
        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $user_data['user_id'];
            header('Location: index.php');
            die;
        }
    }
    echo "Wrong username or password!";
}


//winch-registration
if (isset($_POST['winch-reg'])){
    $user_id = random_num(20);
    $winch_name= mysqli_real_escape_string($db,$_POST['winch-name']);
    $winch_email= mysqli_real_escape_string($db,$_POST['winch-email']);
    $winch_password= mysqli_real_escape_string($db,$_POST['winch-password']);
    $winch_address= mysqli_real_escape_string($db,$_POST['winch-address']);  
    $winch_covered= mysqli_real_escape_string($db,$_POST['winch-area']); 
    $winch_fees= mysqli_real_escape_string($db,$_POST['winch-fees']);

    $target_dir = "img/";
    $target_file = $target_dir . time() . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $winch_pic = time() . basename($_FILES["fileToUpload"]["name"]);
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
  
    $sql="INSERT INTO Rescue_Winch (user_id,Wname,Wemail,Wpassword,Wfees,Waddress,Wcovered_area,image) VALUES ('$user_id','$winch_name', '$winch_email', '$winch_password', '$winch_fees', '$winch_address', '$winch_covered','$winch_pic') ";
    $query= mysqli_query($db, $sql);

    if($query) {
        $_SESSION['user_id'] = $user_id;
        header('location:index.php'); 
    }

    // $_SESSION['winch-name']=$winch_name;
    // $_SESSION['winch-email']=$winch_email;
    // $_SESSION['winch-address']= $winch_address;
    // $_SESSION['winch-cover']= $winch_covered;
    // header('location: winch-page.php');
}

  

//winch-login
if(isset($_POST['winch-login'])){
    $winch_email_login= mysqli_real_escape_string($db,$_POST['winch-email']);
    $winch_password_login= mysqli_real_escape_string($db,$_POST['winch-password']);

    $query="SELECT * FROM Rescue_Winch WHERE Wemail='$winch_email_login' AND Wpassword='$winch_password_login'";
    $result=mysqli_query($db,$query); 
    if($result) {
        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $user_data['user_id'];
            header('Location: index.php');
            die;
        }
    }
    echo "Wrong username or password!";
}

//mech-update

if(isset($_POST['mech-update'])){
    $id=$_POST['edit_id'];
    $update_mech_name=mysqli_real_escape_string($db,$_POST['update-mech-name']);
     $update_mech_address=mysqli_real_escape_string($db,$_POST['update-mech-address']);
     @$update_mech_spec=mysqli_real_escape_string($db,$_POST['update-mech-spec']);
     $update_mech_area=mysqli_real_escape_string($db,$_POST['update-mech-area']);
     $update_mech_image=mysqli_real_escape_string($db,$_POST['update-mech-image']);
 
     $query = "UPDATE `Mechanical` SET mech_name='$update_mech_name', address='$update_mech_address', specialization='$update_mech_spec', covered_area='$update_mech_area',image='$update_mech_image' where mechid='$id' ";
     $result=mysqli_query($db,$query);
 
     if($result)
     {
         echo '<script> alert("Data Updated") </script>';
     }
     else{
         echo '<script> alert("Data is not Updated") </script>';   
     }
 }

 //mech-fees

 if(isset($_POST['input-fees'])){
     $fees=$_POST['input-fees'];
     $_SESSION['result']=$fees;

    header('location:mech-Page.php');
    
    
    }


?>