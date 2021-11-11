<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php 
//edição de dados
if(isset($_GET['codMarca'])){
    $acao="Editar";
    
    $crud= new Crud();
    
    $BFetch=$crud->selectIdDB("*","marca","codMarca=?",array($_GET['codMarca']));
    $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
    $codMarca=$Fetch['codMarca'];
    $nomeMarca=$Fetch['nomeMarca'];  
            
//cadastro novo            
}else{
  $acao="Cadastrar";
  $codMarca=0;
  $nomeMarca=""; 
}

?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">            
      <section class="content-header">
      <div class="container-fluid">
                
         <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->         
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="marca.php">Marca</a></li>
               <li class="breadcrumb-item active"><?php echo $acao;?> marca</li>
            </ol>
          </div>                   
        </div><!-- /.row -->
          
          
       <!-- Horizontal Form -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> <?php echo $acao;?> marca</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form class="form-marca" name="marca" id="marca" method="post" action="Controlles/controllerMarca.php">
                 
                 <input type="hidden" id="acao" name="acao" value="<?php echo $acao?>">
                 <input type="hidden" id="codMarca" name="codMarca" value="<?php echo $codMarca?>">
                 
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputnome" class="col-sm-2 col-form-label">Nome marca :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nomeMarca" class="form-control" value="<?php echo $nomeMarca?>" placeholder="Nome marca" required>
                    </div>
                  </div>                                                                
                </div>
                <!-- /.card-body -->
                
                <div class="card-footer">                      
                  <button type="submit" class="btn btn-info float-left" value="<?php echo $acao?>"> &nbsp; &nbsp;Salvar &nbsp; &nbsp;</button>                                     
                  <a href="marca.php"><button  type="button" class="btn btn-default float-right">Cancelar</button></a>                 
               </div>
                  
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
  </div>
  </div>
  
          
            
       <?php require 'footer.php';?>