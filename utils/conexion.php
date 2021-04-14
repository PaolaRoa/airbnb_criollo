<?php
    
    $servername = "us-cdbr-east-03.cleardb.com";
    
    $username = "b929cd0fbe4485";
    
    $password = "e5cdb617";
    
    $db = "heroku_1db393ffc316d6b";

class Conexion{

public static function connect(){

    $link = new PDO("mysql:host=$servername; dbname=$db", $username, $password,
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                    );

    return $link;

}



}