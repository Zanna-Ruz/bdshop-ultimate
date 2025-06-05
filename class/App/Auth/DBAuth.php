<?php 
namespace App\Auth;

class DBAuth {
    public static function login($login, $pwd){
        return \App\Model\Admin::getUserByCredentials($login, $pwd);
          
        

        
    }
}

// if ($row = \App\App::db()->fetch("SELECT * FROM ". \App\Model\Admin::$table. " WHERE ". $data["login"]['field'] . " = :mail", [":mail" => $data['login']['value']])) {
        //     if (password_verify($data['pwd']['value'], $row[$data['pwd']['field']])){

        //     }
        // }