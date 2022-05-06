<?php 
session_start();
if(isset($_POST["submit"]))
{
    $user_id = $_SESSION['details']['sid'];
    //instantiate
    include "../classes/db.class.php";
    include "../classes/delete_class.php";
    include "../classes/delete_controller_class.php";
    $delete = new ProfileDeleteController($user_id);  
    
    $delete->deleteProfile();
    header("location: ../index.php");
} 