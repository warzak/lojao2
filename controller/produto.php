<?php
include_once "../model/Database.php";
include_once "../model/Produto.php";

//obtendo conexão
$database = new Database();
$conn = $database->getConnection();

$produto = new Produto($conn);
$produto->categoria_id = $_POST['categoria_id'];
$produto->nome = $_POST['nome'];
$produto->valor = $_POST['valor'];
$produto->descricao = $_POST['descricao'];
$produto->criadoEm = date('Y-m-d H:i:s');

if($produto->create()){
   echo "<div class='alert alert-success'>Produto criado com sucesso!</div>";
}else{
   echo "<div class='alert alert-warning'>Erro ao cadastrar produto!</div>";
}

