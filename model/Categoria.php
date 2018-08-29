<?php
class Categoria{

   private $conn;
   private $table_name = 'categorias';
   public $id;
   public $nome;

   //iniciar objeto
   public function __construct($db){
      $this->conn = $db;
   }

   public function getAll(){
      $query = "SELECT id, nome FROM ".$this->table_name . "ORDER BY nome";

      $stmt = $this->conn->prepare($query);
      $stmt->execute;

      return $stmt;
   }

   public function getName(){
      $query = "SELECT nome FROM ".$this->table_name . "WHERE id=?";

      $stmt = $this->conn->prepare($query);
      $stmt->bindParam(1, $this->id);
      $stmt->execute;
      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      $this->nome = $row['nome'];
   }
}

?>