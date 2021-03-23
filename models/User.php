<?php 


require_once("../utils/conexion.php");




class User{
    private $name_user;
    private $password;
    private $email;
    private $city;
    private $rol;
    private $pdata;


    public function __construct($name_user,$password, $email, $city,$rol,$pdata){
        $this->name_user =$name_user;
        $this->password =$password;
        $this->email =$email;
        $this->city=$city;
        $this->rol =$rol;
        $this->pdata =$pdata;
    }

    // CREATE
    public function  createUser(){
        $stmt = Conexion::connect()->prepare("INSERT INTO users(nameu , email , passwords, city, pdata, rol) VALUES ('$this->name_user','$this->email','$this->password', '$this->city',  $this->pdata,$this->rol)");
        $stmt -> execute();
    }



}


?>