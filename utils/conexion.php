<?php
    $url = parse_url(getenv("mysql://us-cdbr-east-03.cleardb.com/heroku_1db393ffc316d6b=true"));

    $servername = $url["us-cdbr-east-03.cleardb.com"];
    
    $username = $url["b929cd0fbe4485"];
    
    $password = $url["e5cdb617 "];
    
    $db = substr($url["path"], 1);

class Conexion{

public static function connect(){

    $link = new PDO("mysql:host=$servername; dbname=$db", $username, $password,
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                    );

    return $link;

}



}