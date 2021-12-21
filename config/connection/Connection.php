<?php

class Connection {

  private $user = "root";
  private $pass ="";
  private $dbname ="turismo";
  private $host = "localhost";

   public function connect(){
    try{
        $pdo = new PDO("mysql:dbname=".$this->dbname.";host=".$this->host,$this->user,$this->pass);
        return $pdo;
    }catch(Exception $er){
        echo $er;
    }
   }
}

?>