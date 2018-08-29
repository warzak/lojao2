<?php

class Produto{
   private $conn;
   private $table_name = 'produtos';
   public $id;
   public $categoria_id;
   public $nome;
   public $valor;
   public $descricao;
   public $foto;        
   public $criadoEm;

   public function __construct($db){
      $this->conn = $db;
   }

   public function create(){
      $query = "INSERT INTO" . $this->table_name .
      "SET nome=:nome, valor=:valor, descricao=:descricao, categoria_id=:categoria_id, foto=:foto, criadoEm=:criadoEm";

      $stmt = $this->conn->prepare($query);

      $this->criadoEm = date('Y-m-d H:i:s');
      $stmt->bindParam(":nome", $this->nome);
      $stmt->bindParam(":valor", $this->valor);
      $stmt->bindParam(":descricao", $this->descricao);
      $stmt->bindParam(":categoria_id", $this->categoria_id);
      $stmt->bindParam(":foto", $this->foto);
      $stmt->bindParam(":criadoEm", $this->criadoEm);
      
      if($stmt->execute()){
         return true;
      }
      return false;
   }
}
?>