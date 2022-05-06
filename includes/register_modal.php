
<?php
session_start();
if(isset($_POST["submit"]))
{
    $user_name = $_POST["uid"];
    $user_email = $_POST["email"];
    $user_mobileNumber = $_POST["mobile_num"];
    $user_password = $_POST["pwd"];
    $user_confirmPassword = $_POST["pwd_confirm"];
  

    //instantiate
    include "../classes/db.class.php";
    include "../classes/register_class.php";
    include "../classes/register_controller_class.php";
    $register = new RegisterController($user_name, $user_email,$user_mobileNumber, $user_password, $user_confirmPassword);  
    
    $register->registerStudent();
    header("location: ../index.php?error=none");
} 
 