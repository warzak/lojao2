<?php
$page_title = "Cadastro de Produto";
include_once "../view/header.php";
include_once "../model/Database.php";
include_once "../model/Produto.php";

//obtendo conexão
$database = new Database();
$conn = $database->getConnection();

$produto = new Produto($conn);
$produto->categoria_id = $_POST['fcategoria'];
$produto->nome = $_POST['fnome'];
$produto->valor = $_POST['fvalor'];
$produto->descricao = $_POST['fdesc'];
$produto->foto = 'teste.jpg';

if($produto->create()){
   echo "<div class='alert alert-success'>Produto criado com sucesso!</div>";
}else{
   echo "<div class='alert alert-warning'>Erro ao cadastrar produto!</div>";
}

