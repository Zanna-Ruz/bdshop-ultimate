<?php
namespace App;
class App {
    private static $db;

    public static function db(){
        if (self::$db=== null){
            self::$db = new \App\Database\Database(DB_HOST,DB_NAME,DB_USER,DB_PASS)
        }
    }

    public static function init(){
        session_start();
        require "../config/config.php";
        self::register();

    }
    public static function register(){
        spl_autoload_register(array(__CLASS__,"autoload"));
    }
    public static function autoload($class){
        $class = str_replace("\\","/",$class);
        require ROOT ."/class/" . $class.".php";

    }
}
?>