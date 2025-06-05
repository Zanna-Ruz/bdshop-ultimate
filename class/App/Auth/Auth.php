<?php
namespace App\Auth;

class Auth extends \Core\Auth\Auth {
    public static function login($login, $pwd){
        if ($id = DBAuth::login($login, $pwd)){
            $_SESSION ["Auth"]= $id;
            return true;
        } 
        return false;
    }
}