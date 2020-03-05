<?php
class Searchquery extends Database
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
        if (empty($location) && empty($type) && empty($price)){
            header("Location: ../pages/index2.php?error='emptyvalues'");
        }      
        elseif (!empty($location) && empty($type) && empty($price)){
            $this->querybylocation();
            
        }elseif(empty($location) && !empty($type) && empty($price)){
            $this->querybytype();
            
        }elseif(empty($location) && empty($type) && !empty($price)){
            $this->querybyprice();
            
        }elseif(!empty($location) && !empty($type) && empty($price)){
            $this->querybytypeandlocation();
            
        }elseif(empty($location) && !empty($type) && !empty($price)){
            $this->querybytypeandprice();
            
        }elseif(!empty($location) && empty($type) && !empty($price)){
            $this->querybylocationandprice();
            
        }elseif(!empty($location) && !empty($type) && !empty($price)){
            $this->querybyall();
        }        
    }
 

    private function querybylocation($location = "", $type = "", $price = "", $name = ""){
        $sql = "SELECT * FROM users WHERE uidUsers = ? AND emailUsers = ?";
        $conn = $this->connect();
        $stmt = mysqli_stmt_init($conn);
        // $stmt = $this->connect()->prepare($sql);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, 'ss', $name, $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($row = $result->fetch_array(MYSQLI_BOTH)) {
                echo '<div class="col-lg-6 col-xl-3 card">
                    <img class="card-img-top" src="house1.jpg" alt="Card image cap">
                     <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>';
            }
        } else {
            echo "shit";
        }      
    }


    private function querybytype(){}
    private function querybyprice(){}
    private function querybytypeandlocation(){}
    private function querybytypeandprice(){}
    private function querybylocationandprice(){}
    private function querybyall(){}
}