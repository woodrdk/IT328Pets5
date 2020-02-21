<?php

require_once ("config-student.php");

class Database
{
    // PDO object
    private $_dbh;

    function __construct()
    {
        try{
            // create new pdo connection
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME,DB_PASSWORD);
       //     echo "Connected";
        }

        catch(PDOException $e){
            echo $e->getMessage();
        }
    }


}