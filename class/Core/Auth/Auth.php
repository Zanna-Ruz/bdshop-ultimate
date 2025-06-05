<?php
namespace Core\Auth;
class Auth {
    public static function isLoggedIn(){
        return !empty($_SESSION["Auth"]);

    }
    public static function logOut(){
        $_SESSION["Auth"] ="";
        session_destroy();
    }

    public static function getUser(){
        if (self::isLoggedIn()){
            return $_SESSION["Auth"];   
        }
       return false;
    }

}