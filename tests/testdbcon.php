<?php
require '../vendor/autoload.php';
require '../src/class/dbconnector.php'

use PHPUnit\Frameowrk\Testcase;

final class DbTest extends TestCase{
    
    public function testCanConnectToDB():void{
        $dbconn = new dbconnector;
        $this -> assertEquals($dbconn,true);
    }
}


?>