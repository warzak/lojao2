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

//obtem quantidade de produtos
$num = $produtos->rowCount();

include_once "header.php";
?>

<div class='row'>
<?php 
if($num > 0){
?>
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
              echo "<td><img style='width:64px;height:64px' src='../uploads/{$foto}'></td>";     echo "<td>{$criadoEm}</td>";           echo "</tr>";  
            }
      ?>
</table>
<?php 
}else{
   echo "<div class='alert alert-info'>Nenhum produto encontrado!</div>";
}
?>
</div> 

        PrimeiroDedoPeDireitoComponent,
        SegundoDedoPeDireitoComponent,
        TerceiroDedoPeDireitoComponent,
        QuartoDedoPeDireitoComponent,
        QuintoDedoPeDireitoComponent,

        PrimeiroDedoPeEsquerdoComponent,
        SegundoDedoPeEsquerdoComponent,
        TerceiroDedoPeEsquerdoComponent,
        QuartoDedoPeEsquerdoComponent,
        QuintoDedoPeEsquerdoComponent,        


import {PrimeiroDedoMaoDireitaComponent} from './body/dedos-mao-direita-component';

        this.examePrimeiroDedoMaoEsquerda = data.examePrimeiroDedoMaoEsquerda || '';
        this.exameSegundoDedoMaoEsquerda = data.exameSegundoDedoMaoEsquerda || '';
        this.exameTerceiroDedoMaoEsquerda = data.exameTerceiroDedoMaoEsquerda || '';
        this.exameQuartoDedoMaoEsquerda = data.exameQuartoDedoMaoEsquerda || '';
        this.exameQuintoDedoMaoEsquerda = data.exameQuintoDedoMaoEsquerda || '';

        this.examePrimeiroDedoMaoDireita = data.examePrimeiroDedoMaoDireita || '';
        this.exameSegundoDedoMaoDireita = data.exameSegundoDedoMaoDireita || '';
        this.exameTerceiroDedoMaoDireita = data.exameTerceiroDedoMaoDireita || '';
        this.exameQuartoDedoMaoDireita = data.exameQuartoDedoMaoDireita || '';
        this.exameQuintoDedoMaoDireita = data.exameQuintoDedoMaoDireita || '';

