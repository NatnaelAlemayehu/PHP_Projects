<?php
require_once 'Databaseclass.php';
class User_registration extends Database {
    private $data;
    public function __construct($postdata){
        $this->data = $postdata;
    }
    public function register(){        
        $this->userexisits();
    }
    private function userexisits(){
        $conn = $this->connect();
        $username = $this->data['userName'];
        $query = "SELECT userName FROM useraccount WHERE userName = '$username'";
        $result = $conn->query($query);
        if ($result->num_rows == 0) {
            if ($this->passwordmatch(trim($this->data['password']), trim($this->data['repeatpassword']))){
                $this->getpostdata();
            }else{
                header("Location: index.php?error=passwordnotacceptable");
            }
        } else {
            header("Location: index.php?error=useralreadyexists");
        }        
    }
    private function passwordmatch($userpassword, $reapeatpassword){
        if (strlen($userpassword) >= 8 and strlen($reapeatpassword) >= 8 and $userpassword === $reapeatpassword){
            return true;
        }else{
            return false;
        }
    }
    private function getpostdata(){      
        $username = trim($this->data['userName']);       
        $email = trim($this->data['emailAddress']);        
        $userpassword = trim($this->data['password']); 
        $country = trim($this->data['country']);
        $accountId = $this->pushuserdata($username, $email, $userpassword, $country); 
        $this->pushscore($accountId);    
    }
    private function pushuserdata($username, $email, $userpassword, $country){
        $sql = "INSERT INTO useraccount (userName, emailAddress, userPassword, country)
                VALUES (?, ?, ?, ?)";                
        $conn = $this->connect();
        $hasedpassword = password_hash($userpassword, PASSWORD_DEFAULT);   
        $stmt = mysqli_stmt_init($conn);        
        if (mysqli_stmt_prepare($stmt, $sql)) {                              
            mysqli_stmt_bind_param($stmt, 'ssss', $username, $email, $hasedpassword, $country);
            if (mysqli_stmt_execute($stmt)){
                $accountId = mysqli_insert_id($conn);
                return $accountId;
            }            
        } else {
            header("Location: signup.php?registration=failed");
        }    
    }

    private function pushscore($accountId){
        $sql = "INSERT INTO score (accountId, bestScore)
                VALUES (?, ?)";
        $conn = $this->connect();
        $initalscore = 0;        
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, 'ii', $accountId, $initalscore);
            if (mysqli_stmt_execute($stmt)) {
                // $accountId = mysqli_insert_id($conn);
                header("Location: signin.php?registration=successful&accountId={$accountId}");
            }
        } else {
            header("Location: signup.php?registration=failed");
        }    
       
    }

   
}