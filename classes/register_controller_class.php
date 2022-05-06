<?php

class RegisterController extends Register {
 
    private $username;
    private $email;
    private $mobileNumber;
    private $password;
    private$confirmPassword ;

    public function __construct($user_name, $user_email,$user_mobileNumber, $user_password, $user_confirmPassword)
    {
        $this->username = $user_name;
        $this->email = $user_email;
        $this->mobileNumber = $user_mobileNumber;
        $this->password = $user_password;
        $this->confirmPassword = $user_confirmPassword;
    }
 
    public function registerStudent(){
        
        if($this->emptyInput() == false) {
           $_SESSION['errprompt'] = "Please provide valid inputs.";
           header("location: ../registration.php?error=".$_SESSION['errprompt']);
           exit();
        }

        if($this->passwordMatch() == false) {
            $_SESSION['errprompt'] = "Password does not match.";
            //header("location: ../registration.php?error=passwordincorrect");
            header("location: ../registration.php");
            exit();
         }

         if($this->studentidTakenCheck() == false) {
            header("location: ../registration.php");
            exit();
         }
         $this->setStudent($this->username, $this->email, $this->mobileNumber, $this->password);
    }

    private function emptyInput(){
        $result;
        if(empty($this->username) || empty($this->email) || empty($this->mobileNumber) || empty($this->password) || empty($this->confirmPassword)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function passwordMatch(){
        $result;
        if($this->password !== $this->confirmPassword) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function studentidTakenCheck(){
        $result;
        if(!$this->checkStudent($this->username, $this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
}