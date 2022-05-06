<?php

class ProfileDeleteController extends DeleteProfile {
 
    private $student_id;

    public function __construct($user_id)
    {
        $this->student_id = $user_id;
        
    }
 
    public function deleteProfile(){
    
        if($this->emptyInput() == false) {
            $_SESSION['errprompt'] = "Student Not Exist";
            header("location: ../views/profile.php");
            exit();
        }
 
         $this->removeProfile($this->student_id);
    }

    private function emptyInput(){
        $result;
        if(empty($this->student_id)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
    

    
}