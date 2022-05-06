
<?php 
session_start();
if(isset($_POST["submit"]))
{
    $user_name = $_POST["uid"];
    $user_password = $_POST["pwd"];
   

    //instantiate
    include "../classes/db.class.php";
    include "../classes/login_class.php";
    include "../classes/login_controller_class.php";
    $login = new LoginController($user_name, $user_password);  
    
    $login->loginStudent();

    header("location: ../views/profile.php?error=none");
} 
 