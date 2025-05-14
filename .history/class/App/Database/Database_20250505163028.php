<?php
namespace App\Database;
class Database extends \Core\Database\Database{
    public function connect(){
        if ($this->db === null){
            $this -> db = new PDO("Mysql:host"=. $this->db_host .";dbname=". $this->db_name .";charset=utf8", $this->db_user,$this->db_pass);
        }
        return $this->db;
       
    }
    protected function execute($sql,$bound=false,$all=true){
        $stmt = $this->connect()->prepare($sql);
        if ($bound){
            foreach($bound as $key => $value){
                if (gettype($value)=="array"){
                    $stmt -> bindValue()
                    
                }else{
                    $stmt -> bindValue($key, $value);
                }

            }
        }

    }
}
