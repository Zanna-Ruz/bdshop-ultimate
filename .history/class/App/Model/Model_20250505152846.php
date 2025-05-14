<?php
namespace App\Model;
class Model{
    public static $table;
    public static $prefix;

    public static function getAll(){
        $sql = "SELECT * FROM ". self::$table ;
        ...//TODO : a comple

    }
    public static function getOn($id){

    }
}
