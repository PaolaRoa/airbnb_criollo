<?php 


require_once("../utils/conexion.php");




class User{
    private $id;
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
    public function setId($id){
        $this->idusers = $id;
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

           $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($arr as $row) {
                $this->id=$row['idusers'];
                $this->name_user = $row['name_user'];
                $this->city = $row['city'];
                $this->rol = $row['rol'];
               // $this->$email= $row['email'];
            }
           // $this->setUserRegister($datos[0][1],$datos[0][3],$datos[0][2],$datos[0][4],$datos[0][6],$datos[0][5]);
           $estmt= $stmt->rowCount();
           return $estmt;
    }

    
    public function validationRol(){
        $stmt = Conexion::connect()->prepare("SELECT * FROM users WHERE email='$this->email' AND password_user='$this->password'");
        $stmt -> execute();
        $estmt= $stmt->fetch();
        return $estmt;
    }

    




    public function setSession(){
        $_SESSION['user_email'] =$this->email;
        $_SESSION['iduser']=$this->id;
        $_SESSION['rol']= $this->rol;

    }
    }




?>