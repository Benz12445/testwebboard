<?php
require_once 'src/class/dbconnector.php';


try{
    $db = new dbconnector('root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pass = md5($_POST['usr_pass']);
    $query = "insert into member(
    name,
    lastname,
    address,
    phone_number,
    email,
    date_regis,
    user_name,
    passwd) values(
    :name,
    :lastname,
    :addr,
    :phone,
    :email,
    :date_regis,
    :usr_usrname,
    :usr_pass)";
    $timenow =  date('Y-m-d');
    $stmt = $db->prepare($query);
    $stmt->bindParam(":name",$_POST['usr_name']);
    $stmt->bindParam(":lastname",$_POST['usr_lastname']);
    $stmt->bindParam(":addr",$_POST['usr_address']);
    $stmt->bindParam(":phone",$_POST['usr_phone']);
    $stmt->bindParam(":email",$_POST['usr_email']);
    $stmt->bindParam(":date_regis",$timenow);
    $stmt->bindParam(":usr_usrname",$_POST['usr_usrname']);
    $stmt->bindParam(":usr_pass",$pass);
    
    
    
    if($stmt->execute())
    {
        header("location:registration_success");
    }else{
        var_dump($stmt);
    }
    
}catch(PDOException $e){
    echo "Error ".$e->getMessage();
}


?>
