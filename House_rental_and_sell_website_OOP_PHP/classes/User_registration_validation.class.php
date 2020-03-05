<?php
require_once '../includes/autoclassloader.inc.php';
class User_registration_validation {
    private $data;
    private $errors = [];
    public function __construct($postData){
        $this->data = $postData;
    }
    public function validateForm(){
        // $this->validateFirstname();
        // $this->validateLastname();
        // $this->validatePhonenumber();
        // $this->validateLocation();
        // $this->validatePassword(); 
        if (count($this->errors) == 0 ){
            $usr_register = new User_registration($this->data);
            $usr_register -> register();
        }else{
            echo "error";
            
        }
                
    }
    private function validateFirstname(){
        $val = trim($this->data['firstname']);
        if (!empty($val)){
            if (!preg_match('/^[a-zA-Z]{3,50}$/', $val)) {
                $this->addError('firstname', 'first must be at least 3 characters long and/or should not contian number');
            }        
        }
    }
    private function validateLastname(){    
        $val = trim($this->data['lastname']);
        if (!empty($val)) {
            if (!preg_match('/^[a-zA-Z]{3, 50}$/', $val)) {
                $this->addError('lastname', 'lastname must be at least 3 characters long and/or should not contian number');
            }        
        } 
    }
    private function validatePhonenumber(){
        $val = trim($this->data['phonenumber']);
        if (!empty($val)) {
            if (!preg_match('/[^0-9]/', $val)) {
                $this->addError('phonenumber', 'phonenumber muststart with 0 and/or should be 10 digits');
            }        
        } 
    }
    private function validateLocation()
    {
        $val = trim($this->data['location']);
        if (!empty($val)) {
            if (!preg_match('/^[a-zA-Z]{4,12}$/', $val)) {
                $this->addError('location', 'location must be 4-12 chars and non-numeric');
            }
        } 
    }
    private function validatePassword(){
        $pass1 = trim($this->data['password']);
        $pass2 = trim($this->data['repeatpassword']);
        if (!empty($pass1) && !empty($pass2) ) {
            if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $pass1)) {
                $this->addError('password', 'password must be between 6-12 chars and alpha-numeric');
            }
            if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $pass2)) {
                $this->addError('repeatpassword', 'repeat-password must be between 6-12 chars and alpha-numeric');
            }
            if (!$pass1 == $pass2) {
                $this->addError('password-mismatch', "passwords do not match");
            }
        } 
    }
    private function addError($key, $val){
        $this->errors[$key]= $val;
    }

}