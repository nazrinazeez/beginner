<?php

class Register extends Db {
    
    protected function setStudent($username, $email , $mobileNumber, $password ) {
        $con = $this->connect();
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO student (username, email, mobilenumber, password)
            VALUES ('$username', '$email', '$mobileNumber', '$hashedpassword')";

            if(mysqli_query($con, $query)) { 
            $_SESSION['prompt'] = "Account registered. You can now log in.";
            header("location: ../index.php");
            exit();

            } else {

            die("Error with the query");

            }
        mysqli_close($con);
    }

    protected function checkStudent($username, $email) {
        $resultcheck;
        $con = $this->connect();
        $query = "SELECT username FROM student WHERE username = '$username'";
        $result = mysqli_query($con,$query);

        if(mysqli_num_rows($result) == 0) {

        $query = "SELECT email FROM student WHERE email = '$email'";
        $result = mysqli_query($con,$query);
        
            if(mysqli_num_rows($result) == 0) {
                $resultcheck = true;
            }
            else {
                $resultcheck = false;
                $_SESSION['errprompt'] = "Email already exists.";
            }
        }else {
            $_SESSION['errprompt'] = "Username already exists.";
        }      
        
        mysqli_close($con);
        return $resultcheck;
       
    }
}
