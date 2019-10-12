<?php

namespace Hcode\Model;

use\Hcode\Model;
use \Hcode\DB\Sql;

Class User extends Model{

    const SESSION = "User";

    public static function Login($login, $password)
    {

        $sql = New Sql();
        $result = $sql->select ("SELECT * FROM tb_users WHERE deslogin = :LOGIN", array(
            ":LOGIN"=>$login
        ));

        if(count($result) === 0)
        {
            throw new \Exception("Usuario inexistente ou senha invalidade");
        }

        $data = $result[0];
        //passa primeiro a que vem como parametro
        if(password_verify($password, $data["despassword"]) === true)
        {
            $user = new User();

        $user->setData($data);

        $_SESSION[User::SESSION] = $user->getValues();

        return $user;
        
            
        }else{
            throw new \Exception("Usuario inexistente ou senha invalidade"); 
        }

    }

    public static function verifyLogin($inadmin = true)
    {

        if(!isset($_SESSION[User::SESSION]) || !$_SESSION[User::SESSION] || !(int)$_SESSION[User::SESSION]["iduser"] > 0 || (bool)$_SESSION[User::SESSION]["inadmin"] !== $inadmin){

            header("Location:/admin/login");
            exit;
        }

    }

    public static function logout()
    {
        $_SESSION[User::SESSION] = NULL;
    }
}

?>