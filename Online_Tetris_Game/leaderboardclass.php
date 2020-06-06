<?php
require_once 'Databaseclass.php';
class leaderBoard extends Database{
    public function __construct()
    {
        $this->query();
    }
    private function query(){
        $conn = $this->connect();
        $sql = "SELECT useraccount.accountId, userName, country, bestScore FROM score INNER JOIN useraccount ON useraccount.accountId = score.accountId ORDER BY bestScore DESC LIMIT 10";
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            header("Location: game.php?error=noleaderboard");
        } else {            
            echo '<table class="table">' . '<tr>' . '<th>Rank</th>' . '<th>User Name</th>' . '<th>Best Score</th>' . '<th>Country</th>' . '</tr>';
            $rowCountStart = 1;
            while ($data = $result->fetch_array(MYSQLI_BOTH)) {
                echo '<tr>'
                    . '<td>' . $rowCountStart . '</td>'
                    . '<td>' . $data['userName'] . '</td>'
                    . '<td>' . $data['bestScore'] . '</td>'
                    . '<td>' . $data['country'] . '</td>'                    
                    . '</tr>';
                $rowCountStart += 1;
            }
        }       
    }
}
?>