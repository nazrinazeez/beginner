<?php

class DeleteProfile extends Db {
    
    protected function removeProfile($student_id) {
        $con = $this->connect();
        $query = "DELETE FROM student WHERE sid ='$student_id'";
        
            if(mysqli_query($con, $query)) { 
                $_SESSION['prompt'] = "Student Deleted Successfully.";
                session_destroy();
                header("location: ../index.php");
                exit();
            
            } else {

            die("Error with the query");

            }
        mysqli_close($con);
    }
}
