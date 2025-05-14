<?php
namespace App\Database;
class Database extends \Core\Database\Database{
    public function connect(){
        $this ->db = new PDO(Mysql:host = $this->db')
    }
}