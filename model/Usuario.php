<?php
class Usuario{

   private $conn;
   private $table_name = 'usuarios';
   public $id;
   public $nome;
   public $email;
   public $senha;
   public $nivel_acesso;
   public $status;
   public $criadoEm;

   //iniciar objeto
   public function __construct($db){
      $this->conn = $db;
   }

   public function emailExists()
   {
      $query = "SELECT * FROM ".$this->table_name." WHERE email = ?";

      $stmt = $this->conn->prepare($query);
      $this->email=htmlspecialchars(strip_tags($this->email));

      $stmt->bindParam(1, $this->email);
      $stmt->execute();

      //obtem nros de linhas
      $num = $stmt->rowCount();

      if($num > 0){
         $row = $stmt->fetch(PDO::FETCH_ASSOC);
         $this->id = $row['id'];
         $this->email = $row['email'];
         $this->senha = $row['senha'];
         $this->nivel_acesso = $row['nivel_acesso'];
         $this->status = $row['status'];

         return true;
      }
      return false;
   }
}

?>