<?php 
session_start();
if(isset($_POST["submit"]))
{
    $user_id = $_SESSION['details']['sid'];
    $user_name = $_SESSION['details']['username'];
    $user_email = $_POST["email"];
    $user_mobileNumber = $_POST["mobile_num"];

    //instantiate
    include "../classes/db.class.php";
    include "../classes/profile_class.php";
    include "../classes/profile_controller_class.php";
    $login = new ProfileController($user_id,$user_name, $user_email,$user_mobileNumber);  
    
    $login->editProfile();
    header("location: ../views/profile.php?error=none");
} 