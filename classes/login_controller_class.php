<?php

class LoginController extends Login {
 
    private $username;
    private $password;

    public function __construct($user_name, $user_password)
    {
        $this->username = $user_name;
        $this->password = $user_password;
        
    }
 
    public function loginStudent(){
    
        if($this->emptyInput() == false) {
           $_SESSION['errprompt'] = "Please provide valid inputs.";
           header("location: ../index.php");
           exit();
        }

         $this->getStudent($this->username, $this->password);
    }

    private function emptyInput(){
        $result;
        if(empty($this->username) || empty($this->password)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    

    
}