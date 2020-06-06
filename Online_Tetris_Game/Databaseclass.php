<?php

class Database
{
    private static $hostName = "remotemysql.com";
    private static $hostUsername = "KwLYX3VvNO";
    private static $databaseName = "KwLYX3VvNO";
    private static $databasePassword = "sOKHplMlqN";

    public function connect()
    {
        $connection = mysqli_connect(self::$hostName, self::$hostUsername, self::$databasePassword, self::$databaseName);
        if (mysqli_connect_error()) {
            echo "unable to connect";
        } else {
            return $connection;
        }
    }

    public function disconnect($connection)
    {
        $connection->close();
    }
}