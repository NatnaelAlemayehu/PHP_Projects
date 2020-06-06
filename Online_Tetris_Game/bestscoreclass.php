<?php
require_once 'Databaseclass.php';
class bestScore extends Database{
    public function __construct()
    {
        
    }
    public function query(){
        if (isset($_SESSION['accountId'])){
            $accountId = $_SESSION['accountId'];
        }
        $conn = $this->connect();
        $sql = "SELECT bestScore FROM score WHERE accountId = '$accountId'";
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            header("Location: game.php?error=nobestscore");
        } else {            
            while ($data = $result->fetch_array(MYSQLI_BOTH)) {
                echo $data['bestScore'];
            }
        }       
    }

    public function update()
    {
        if (isset($_SESSION['accountId'])) {
            $accountId = $_SESSION['accountId'];
            $bestscore = $_COOKIE['bestScore'];
        }
        $conn = $this->connect();
        $sql = "UPDATE score SET bestScore = '$bestscore' WHERE accountId = '$accountId'";
        $conn->query($sql);
        // if ($result->num_rows == 0) {
        //     header("Location: game.php?error=nobestscore");
        // } else {
        //     while ($data = $result->fetch_array(MYSQLI_BOTH)) {
        //         echo $data['bestScore'];
        //     }
        // }
    }

}


?>