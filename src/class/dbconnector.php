<?php
class dbconnector extends PDO{
    
    function __construct($dbuser,$dbpass)
    {
        try{
            parent::__construct('mysql:host=localhost;dbname=webboard',$dbuser,$dbpass);
        }catch (PDOException $e){
            echo "Error".$e->getMessage();
        }
        
    }
    
}


?>