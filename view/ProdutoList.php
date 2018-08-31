<?php
$page_title = "Listagem de Produto";
include_once "../model/Database.php";
include_once "../model/Produto.php";
include_once "../model/Categoria.php";

//obtendo conexão
$database = new Database();
$conn = $database->getConnection();

$produto = new Produto($conn);
$categoria = new Categoria($conn);

//obtem os produtos
$produtos = $produto->getAll();

include_once "header.php";
?>

<div class='row'>
   <table class='table table-hover table-bordered'>
      <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Foto</th>
            <th>Criado em</th>
            <th>Ação</th>
      </tr>
      <?php
           while($registro = $produtos->fetch(PDO::FETCH_ASSOC)){
              extract($registro);
              echo "<tr>";
              echo "<td>{$id}</td>";
              echo "<td>{$nome}</td>";
              
            //   $categoria->id = $categoria_id;
            //   $categoria->getName();
            //   echo "<td>{$categoria->nome}</td>";      
   echo "<td>
            {$categoria->getName($categoria_id)}
         </td>";                   

              echo "<td>{$descricao}</td>";            echo "<td>{$valor}</td>";
              echo "<td><img src='{$foto}'></td>";     echo "<td>{$criadoEm}</td>";           echo "</tr>";  
            }
      ?>
</table>   