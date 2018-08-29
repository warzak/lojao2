<?php

class Database{
   private $host = '172.17.0.1';
   private $db_name = 'lojao';
   private $username = 'root';
   private $password = '1234';
   public $conn;

   public function getConnection(){
      $this->conn = null;
      try{
         $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->username, $this->password);
         
         $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      }catch(PDOException $exception){
         echo "Errrouuuuu " . $exception->getMessage();
      }

      return $this->conn;
   }
} 


?>