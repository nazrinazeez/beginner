<?php

class Login extends Db {
    
    protected function getStudent($username, $password) {
        
        $con = $this->connect();
        $query = "SELECT * FROM student WHERE username = '$username'";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) > 0) {  
        $row = mysqli_fetch_assoc($result);
        $_SESSION['userid'] = $row['sid'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['details'] = $row ; 
        
            if(password_verify($password, $row['password'])){
                header("location:../views/profile.php?error=");
                exit();
            }
            else{
                $_SESSION['errprompt'] = "Incorrect Password.";
                header("location:../index.php?error=Incorrect password");
                exit(); 
            }   
        } else{
            $_SESSION['errprompt'] = "Incorrect Username.";
            header("location:../index.php?error=Incorrect Username");
            exit(); 
        }

        unset($_SESSION['errprompt']);
        mysqli_close($con);
    }
}
