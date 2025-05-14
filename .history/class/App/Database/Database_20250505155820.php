<?php
namespace App\Database;
class Database extends \Core\Database\Database{
    public function connect(){
        if ($this->db === null)
        $this -> db = new PDO("Mysql:host"=. $this->db_host .";dbname=". $this->db_name .";charset=utf8", $this->db_user,$this->db_pass);
    }
}