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
    
    return header('Location: first.php');
    
?>