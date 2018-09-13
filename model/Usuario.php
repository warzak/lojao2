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
}

?>