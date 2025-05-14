<?php
namespace App\Model;
class Model{
    public static $table;
    public static $prefix;

    public static function getAll(){
        $sql = "SELECT * FROM ". self::$table;
        return App::db()->fet

    }
    public static function getOn($id){
        ...//TODO : a completer

    }
}
