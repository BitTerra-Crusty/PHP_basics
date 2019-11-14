<?php

class DBconn
{
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "";
    private $DBName = "developer_test";
    private $charset = "utf8mb4";

    public function connection()
    {
        try{
            $dsn = "mysql:host=".$this->serverName.";dbname=".$this->DBName.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->userName, $this->password);
            //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch(PDOException $e)
        {
            // echo $e.getMessage();
           return "some error";
        }
    }
}