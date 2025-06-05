<?php
 namespace app\Model;
 class Admin extends Model {
    public static $table = "table_admin";
    public static $prefix ="admin_";

    public static function getUserByCredentials($login, $pwd){
        $sql = "SELECT " . self::$prefix ."id," . self::$prefix ."password FROM ". self::$table . " WHERE " . self::$prefix ."mail = :login";
        if ($user = \App\App::db()-> fetch($sql,[":login"=>$login])){
            if (password_verify($pwd, $user[self::$prefix . "password"])){
                return $user[self::$prefix ."id"];
            }
        }
        return false;
    }
    
}
