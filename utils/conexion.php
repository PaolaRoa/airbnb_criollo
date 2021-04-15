<?php
    
    $servername = "us-cdbr-east-03.cleardb.com";
    
    $username = "b929cd0fbe4485";
    
    $password = "e5cdb617";
    
    $db = "heroku_1db393ffc316d6b";

    //mysql:host=127.0.0.1;port=3306;dbname=mysql;charset=utf8','user','password'//

class Conexion{

public static function connect(){

    $link = new PDO("mysql:host=us-cdbr-east-03.cleardb.com; dbname=heroku_1db393ffc316d6b", 'b929cd0fbe4485', 'e5cdb617',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                    );

    return $link;

}



}