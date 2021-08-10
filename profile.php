<?php 
include('db.php');

    $user_data = check_user_login();
    $mech_data = check_mech_login();
    $winch_data = check_winch_login();

    if($user_data) {
        return header('Location: user-page.php');
    } else if ($mech_data) {
        return header('Location: mech-page.php');
    } else if ($winch_data) {
        return header('Location: winch-page.php');
    }
    
    return header('Location: first.php');
    
?>