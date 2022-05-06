<?php

class Profile extends Db {
    
    protected function updateProfile($student_id,$student_name,$student_email,$student_mobile_number) {
        $con = $this->connect();
        $query = "UPDATE student SET username = '$student_name', email = '$student_email', mobilenumber = '$student_mobile_number'
        WHERE sid='".$student_id."'";
        
            if(mysqli_query($con, $query)) { 
                $_SESSION['prompt'] = "Student Details Updated Successfully.";
                $_SESSION['details']['username'] = $student_name;
                $_SESSION['details']['email'] = $student_email;
                $_SESSION['details']['mobilenumber'] = $student_mobile_number;

                header("location: ../views/profile.php");
                exit();
            
            } else {

            die("Error with the query");

            }
        mysqli_close($con);
    }
}
