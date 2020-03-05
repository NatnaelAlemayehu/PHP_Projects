<?php 
class User_authentication extends Database{
    private $data;   
    public function __construct($postData)
    {
        $this->data = $postData;
    }

    private function validate_user(){
        $email = $this->data['email'];
        $password = $this->data['password'];
        
        $this->authenticate($email, $password);
    }

    private function authenticate($user_email, $user_password){
        $sql = "SELECT * FROM users WHERE email = $user_email";
        $conn = $this->connect();       
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            echo "No records founds";
        } else {            
            while ($data = $result->fetch_array(MYSQLI_BOTH)) {
                if ($data['password'] == $user_password){
                    $user_Id = $data['idUsers'];
                    header("Location: ../pages/user_dashboard.php?userId={$user_Id}");
                }                
            }
        }
    }
}