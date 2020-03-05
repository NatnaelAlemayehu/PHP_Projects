<?php
class Userregistration extends Database
{
    private $data;
    public function __construct($postdata)
    {
        $this->data = $postdata;
    }
    public function register()
    {
        $this->getpostdata();
    }
    private function getpostdata()
    {
        $location = $this->data['location'];
        $type = $this->data['type'];
        $price = $this->data['price'];
        $name = $this->data['name'];
        $this->pushdata($location, $type, $price, $name);
    }
    private function pushdata($location = "", $type = "", $price = "", $name = "")
    {
        $sql = "INSERT INTO property (uidUsers, emailUsers, pwdUsers)
                VALUES (?, ?, ?)";
        $conn = $this->connect();
        $stmt = mysqli_stmt_init($conn);
        // $stmt = $this->connect()->prepare($sql);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $password);
            mysqli_stmt_execute($stmt);
            header("Location: ../pages/signup.php?registration=successful");
        } else {
            header("Location: ../pages/signup.php?registration=successful");
        }
    }
}