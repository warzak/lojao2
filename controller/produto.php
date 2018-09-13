<?php
$page_title = "Cadastro de Produto";
include_once "../view/header.php";
include_once "../model/Database.php";
include_once "../model/Produto.php";

//obtendo conexão
$database = new Database();
$conn = $database->getConnection();

$foto= !empty($_FILES["ffoto"]["name"]) ? 
sha1_file($_FILES['ffoto']['tmp_name']) . "-" . basename($_FILES["ffoto"]["name"]) : "";

$foto=htmlspecialchars($foto);

$produto = new Produto($conn);
$produto->categoria_id = $_POST['fcategoria'];
$produto->nome = $_POST['fnome'];
$produto->valor = $_POST['fvalor'];
$produto->descricao = $_POST['fdesc'];
$produto->foto = $foto;

if($foto){
   $target_directory = "../uploads/";
   $target_file = $target_directory . $foto;
   
   if(!move_uploaded_file($_FILES['ffoto']['tmp_name'], $target_file)){
         echo "<div class='alert alert-danger'>
         Erro ao fazer upload da foto!
         </div>";
         die();
   }
}

if($produto->create()){
   echo "<div class='alert alert-success'>Produto criado com sucesso!</div>";
}else{
   echo "<div class='alert alert-warning'>Erro ao cadastrar produto!</div>";
}

