<?php
class User_registration extends Database {
    private $data;
    public function __construct($postdata){
        $this -> data = $postdata;
    }
    public function register(){
        $this -> getpostdata();
    }
    private function getpostdata(){      
        $firstname = $this->data['firstname'];
        $lastname = $this->data['lastname'];
        $email = $this->data['email'];
        $phonenumber = $this->data['phonenumber'];
        $location = $this->data['location'];
        $password = $this->data['password'];
        $this->pushdata($firstname, $lastname, $email, $phonenumber, $location, $password);     
    }
    private function pushdata($f_name, $l_name, $email, $phone, $location, $pass){
        $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, usr_location, usr_password)
                VALUES (?, ?, ?, ?, ?, ?)";
        $conn = $this->connect();
        $stmt = mysqli_stmt_init($conn);
        // $stmt = $this->connect()->prepare($sql);
        if (mysqli_stmt_prepare($stmt, $sql)) {                              
            mysqli_stmt_bind_param($stmt, 'ssssss', $f_name, $l_name, $email, $phone, $location, $pass);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)){
                $userId = $row['userId'];
                header("Location: ../pages/user_dashboard.php?registration=successful&userId={$userId}");
            }           
        } else {
            header("Location: ../pages/signup.php?registration=failed");
        }    
    }
}