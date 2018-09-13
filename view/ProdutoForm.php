<?php
$page_title = "Cadastro de Produto";
include_once "../model/Database.php";
include_once "../model/Categoria.php";

//obtendo conexão
$database = new Database();
$conn = $database->getConnection();

//obtendo categorias
$categoria = new Categoria($conn);
$categorias = $categoria->getAll();


include_once "header.php";

echo "<div class='right-button-margin'>";
    echo "<a href='ProdutoList.php' class='btn btn-default pull-right'>Listar Produtos</a>";
echo "</div>";
?>

<form class="form-horizontal" action="../controller/produto.php" method="POST" enctype="multipart/form-data">
   <fieldset>

   <!-- Text input-->
   <div class="form-group">
      <label class="col-md-4 control-label" for="fcategoria">Categoria</label>  
      <div class="col-md-4">
         <!-- select inicio -->
         <select class='form-control' name='fcategoria'>
            <option>Selecione</option>
      <?php
          //enquanto existir categorias
          //extrai os dados
           while($registro = $categorias->fetch(PDO::FETCH_ASSOC)){
             //extraindo
              extract($registro);
              //imprimindo cada categoria        
              echo "<option value='{$id}'>{$nome}</option>";
            }
      ?>
         </select>
         <!-- select fim-->

      </div>
   </div>

   <!-- Text input-->
   <div class="form-group">
      <label class="col-md-4 control-label" for="fnome">Nome</label>  
      <div class="col-md-4">
         <input required id="fnome" name="fnome" placeholder="" class="form-control input-md" type="text">
               
      </div>
   </div>

   <!-- Text input-->
   <div class="form-group">
      <label class="col-md-4 control-label" for="fvalor">Valor R$</label>  
      <div class="col-md-4">
         <input type="number" step="any" min="0" required id="fvalor" name="fvalor" placeholder="" class="form-control input-md">
      </div>
   </div>

   <!-- Text input-->
   <div class="form-group">
      <label class="col-md-4 control-label" for="fdesc">Descrição</label>  
      <div class="col-md-4">
         <input required id="fdesc" name="fdesc" placeholder="" class="form-control input-md" type="text">
               
      </div>
   </div>

   <!-- Text input-->
   <div class="form-group">
      <label class="col-md-4 control-label" for="ffoto">Foto</label>  
      <div class="col-md-4">
         <input required id="ffoto" name="ffoto" type="file">
      </div>
   </div>            

   <!-- Button -->
   <div class="form-group">
   <label class="col-md-4 control-label" for=""></label>
   <div class="col-md-4">
      <button id="" name="" class="btn btn-primary">Salvar</button>
      <a href='index.php' class='btn btn-warning m-b-1em'>Listar</a>
   </div>
   </div>

   </fieldset>
</form>

<?php
include_once "footer.php";
?>