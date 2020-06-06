<?php
require_once 'Databaseclass.php';
class rate extends Database{
    public $data;
    public function __construct($postdata)
    {
    $this->data = $postdata;
    $this->rate();
        
    }
    private function rate(){
        $rating = $this->data['rating'];
        if (isset($_SESSION['accountId'])) {
            $accountId = $_SESSION['accountId'];           
        }
        $conn = $this->connect();
        $sql = "UPDATE score SET rating = '$rating' WHERE accountId = '$accountId'";
        $conn->query($sql);
    }

}
?>