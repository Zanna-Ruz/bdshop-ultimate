<?php
namespace App\Model;
class Model{
    public static $table;
    public static $prefix;

    public static function getAll(){
        "SELECT * FROM ". self::$table ." "

    }
    public static function getOn($id){

    }
}
