<?php
$page_title = "Lojão 2";
include_once "../view/header.php";
include_once "../model/Database.php";
include_once "../model/Usuario.php";

//obtendo conexão
$database = new Database();
$conn = $database->getConnection();

$usuario = new Usuario($conn);
$usuario->email = $_POST['inputEmail'];
$email_exists = $usuario->emailExists();

//se existe email
//e se a senha é valida
//e se status do user for 1 (confirmado)
if ($email_exists && password_verify($_POST['inputPassword'], $usuario->senha) && $usuario->status==1){
   //criar sessão do usuário
   //inicia sessão
   session_start();
   //cria vars de sessão
   $_SESSION['logado'] = true;
   $_SESSION['usuario_id'] = $usuario->id;
   $_SESSION['usuario_nivel_acesso'] = $usuario->nivel_acesso;
   $_SESSION['usuario_nome'] = $usuario->nome;

   if($usuario->nivel_acesso=='adm'){
      header("Location: painel.php");
   }else{
      header("Location: principal.php");
   }
}