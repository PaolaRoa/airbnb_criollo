<?php 


require_once("../utils/conexion.php");




class User{
    private $name_user;
    private $password;
    private $email;
    private $city;
    private $rol;
    private $pdata;

    public function __construct(){

    }

    public function setUserRegister($name_user,$password, $email, $city,$rol,$pdata){
        $this->name_user =$name_user;
        $this->password =$password;
        $this->email =$email;
        $this->city=$city;
        $this->rol =$rol;
        $this->pdata =$pdata;
    }

    public function setUserLogin($email, $password){
        $this->email =$email;
        $this->password =$password;
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
            $stmt = Conexion::connect()->prepare("INSERT INTO users(name_user , email , password_user, city, pdata, rol) VALUES ('$this->name_user','$this->email','$this->password', '$this->city',  $this->pdata,$this->rol)");
            $stmt -> execute();
            return 1;
        } catch (\Throwable $th) {
            return 0;
        }
    }

    public function loginUserValidation(){
           $stmt = Conexion::connect()->prepare("SELECT * FROM users WHERE email='$this->email' AND password_user='$this->password' ");
           $stmt -> execute();
           $estmt= $stmt->rowCount();
           return $estmt;
    }

    public function validationRol(){
        $stmt = Conexion::connect()->prepare("SELECT * FROM users WHERE email='$this->email' AND password_user='$this->password'");
        $stmt -> execute();
        $estmt= $stmt->fetch();
        return $estmt['rol'];
    }
    }




?>