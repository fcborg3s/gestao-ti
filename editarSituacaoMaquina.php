<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php 
//edição de dados
if(isset($_GET['codSituacao'])){
    $acao="Editar";
    
    $crud= new Crud();
    
    $BFetch=$crud->selectIdDB("*","situacaoMaquina","codSituacao=?",array($_GET['codSituacao']));
    $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
    $codSituacao=$Fetch['codSituacao'];
    $situacao=$Fetch['situacao'];  
            
//cadastro novo            
}else{
  $acao="Cadastrar";
  $codSituacao=0;
  $situacao=""; 
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
                <li class="breadcrumb-item"><a href="situacaoMaquina.php">Situação Maquina</a></li>
               <li class="breadcrumb-item active"><?php echo $acao;?> maquina</li>
            </ol>
          </div>                   
        </div><!-- /.row -->
          
          
       <!-- Horizontal Form -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> <?php echo $acao;?> maquina</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form class="form-maquina" name="maquina" id="maquina" method="post" action="Controlles/controllerSituacaoMaquina.php">
                 
                 <input type="hidden" id="acao" name="acao" value="<?php echo $acao?>">
                 <input type="hidden" id="codSituacao" name="codSituacao" value="<?php echo $codSituacao?>">
                 
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputnome" class="col-sm-2 col-form-label">Situação :</label>
                    <div class="col-sm-10">
                        <input type="text" name="situacao" class="form-control" value="<?php echo $situacao?>" placeholder="Situação" required>
                    </div>
                  </div>                                                                
                </div>
                <!-- /.card-body -->
                
                <div class="card-footer">                      
                  <button type="submit" class="btn btn-info float-left" value="<?php echo $acao?>"> &nbsp; &nbsp;Salvar &nbsp; &nbsp;</button>                                     
                  <a href="situacaoMaquina.php"><button  type="button" class="btn btn-default float-right">Cancelar</button></a>                 
               </div>
                  
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
  </div>
  </div>
  
          
            
       <?php require 'footer.php';?>