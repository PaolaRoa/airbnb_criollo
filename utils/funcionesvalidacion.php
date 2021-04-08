<?php

function isnull($nombre, $user, $pass){
    if(strlen(trim($nombre))<1 || strlen(trim($user))<1 || strlen(trim($pass))<1  ){
        return true;

    }
    else{
        return false;
    }
};

function isEmail($email)
{
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    };
};

function validaPassword($var1, $var2){
    if(stromp($var1, $var2) !==0){
            return false;
    }
    else{
        return true;
    }
}

 




?>