<?php
require_once 'vendor/autoload.php';

$db = new dbconnector('root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try{
   
    
}catch(PDOException $e){
    header("Location: create_forum_failed.html");
}






?>