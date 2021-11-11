<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php 
//edição de dados
if(isset($_GET['codTipoMaquina'])){
    $acao="Editar";
    
    $crud= new Crud();
    
    $BFetch=$crud->selectIdDB("*","tipomaquina","codTipoMaquina=?",array($_GET['codTipoMaquina']));
    $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
    $codTipoMaquina=$Fetch['codTipoMaquina'];
    $tipo=$Fetch['tipo'];  
            
//cadastro novo            
}else{
  $acao="Cadastrar";
  $codTipoMaquina=0;
  $tipo=""; 
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
                <li class="breadcrumb-item"><a href="tipomaquina.php">Tipo Maquina</a></li>
               <li class="breadcrumb-item active"><?php echo $acao;?> tipo maquina</li>
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
              
              <form class="form-maquina" name="maquina" id="marca" method="post" action="Controlles/controllerTipoMaquina.php">
                 
                 <input type="hidden" id="acao" name="acao" value="<?php echo $acao?>">
                 <input type="hidden" id="tipomaquina" name="codTipoMaquina" value="<?php echo $codTipoMaquina?>">
                 
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputnome" class="col-sm-2 col-form-label">Tipo maquina :</label>
                    <div class="col-sm-10">
                        <input type="text" name="tipo" class="form-control" value="<?php echo $tipo?>" placeholder="Tipo Maquina" required>
                    </div>
                  </div>                                                                
                </div>
                <!-- /.card-body -->
                
                <div class="card-footer">                      
                  <button type="submit" class="btn btn-info float-left" value="<?php echo $acao?>"> &nbsp; &nbsp;Salvar &nbsp; &nbsp;</button>                                     
                  <a href="tipoMaquina.php"><button  type="button" class="btn btn-default float-right">Cancelar</button></a>                 
               </div>
                  
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
  </div>
  </div>
  
          
            
       <?php require 'footer.php';?>