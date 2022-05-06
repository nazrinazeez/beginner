<?php

class ProfileController extends Profile {
 
    private $student_id;
    private $student_name;
    private $student_email;
    private $student_mobile_number;

    public function __construct($user_id,$user_name, $user_email,$user_mobileNumber)
    {
        $this->student_id = $user_id;
        $this->student_name = $user_name;
        $this->student_email = $user_email;
        $this->student_mobile_number = $user_mobileNumber;
        
    }
 
    public function editProfile(){
    
        if($this->emptyInput() == false) {
            $_SESSION['errprompt'] = "Please provide valid inputs.";
            header("location: ../views/edit_profile.php?error=".$_SESSION['errprompt']);
            exit();
        }
 
         $this->updateProfile($this->student_id,$this->student_name,$this->student_email,$this->student_mobile_number);
    }

    private function emptyInput(){
        $result;
        if(empty($this->student_name) || empty($this->student_email) || empty($this->student_mobile_number)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
    

    
}