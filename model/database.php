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
            //echo "Connected";
        }

        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function getPets()
    {
        //1. Define the query
        $sql = "SELECT * FROM pets
                ORDER BY name";

        //2. prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters

        //4. Execute the statement
        $statement->execute();

        //5. Get the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


}