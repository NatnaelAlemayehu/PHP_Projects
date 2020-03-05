<?php 

class Database {
    private static $hostName = "localhost";
    private static $hostUsername = "root";
    private static $databaseName = "inthaobackend";
    private static $databasePassword = "";

    protected function connect()
    {    
        $connection = mysqli_connect(self::$hostName, self::$hostUsername, self::$databasePassword, self::$databaseName);
        if (mysqli_connect_error()) {
            echo "unable to connect";
        } else {
            return $connection;
        }
    }

    protected function disconnect($connection){
        $connection->close();        
    }
}