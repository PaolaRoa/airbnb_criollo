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


    // VALIDATION EMAIL 

    public function validationEmail(){
        $stmt = Conexion::connect()->prepare("SELECT * FROM users WHERE email='$this->email'");

        $stmt -> execute();
        $estmt= $stmt->rowCount();

        return $estmt;
    }

    // CREATE
    public function  createUser(){

        try {
            $stmt = Conexion::connect()->prepare("INSERT INTO users(nameu , email , passwords, city, pdata, rol) VALUES ('$this->name_user','$this->email','$this->password', '$this->city',  $this->pdata,$this->rol)");
            $stmt -> execute();
            return 1;
        } catch (\Throwable $th) {
            return 0;
        }

    public function showUser(){
        $stmt = Conexion::connect()->prepare("SELECT * FROM users WHERE email='$this->email'");

        $stmt -> execute();
        
    }
            
    }

}


?>