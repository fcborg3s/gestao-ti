<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php 
//edição de dados
if(isset($_GET['codDepartamento'])){
    $acao="Editar";
    
    $crud= new Crud();
    
    $BFetch=$crud->selectIdDB("*","departamento","codDepartamento=?",array($_GET['codDepartamento']));
    $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
    $codDepartamento=$Fetch['codDepartamento'];
    $nomeDepartamento=$Fetch['nomeDepartamento'];  
            
//cadastro novo            
}else{
  $acao="Cadastrar";
  $codDepartamento=0;
  $nomeDepartamento=""; 
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
                <li class="breadcrumb-item"><a href="departamento.php">Departamento</a></li>
               <li class="breadcrumb-item active"><?php echo $acao;?> departamento</li>
            </ol>
          </div>                   
        </div><!-- /.row -->
          
          
       <!-- Horizontal Form -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> <?php echo $acao;?> departamento</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form class="form-departamento" name="departamento" id="departamento" method="post" action="Controlles/controllerDepartamento.php">
                 
                 <input type="hidden" id="acao" name="acao" value="<?php echo $acao?>">
                 <input type="hidden" id="codEmpresa" name="codDepartamento" value="<?php echo $codDepartamento?>">
                 
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputnome" class="col-sm-2 col-form-label">Nome departamento :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nomeDepartamento" class="form-control" value="<?php echo $nomeDepartamento?>" placeholder="Nome Departamento" required>
                    </div>
                  </div>                                                                
                </div>
                <!-- /.card-body -->
                
                <div class="card-footer">                      
                  <button type="submit" class="btn btn-info float-left" value="<?php echo $acao?>"> &nbsp; &nbsp;Salvar &nbsp; &nbsp;</button>                                     
                  <a href="departamento.php"><button  type="button" class="btn btn-default float-right">Cancelar</button></a>                 
               </div>
                  
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
  </div>
  </div>
  
          
            
       <?php require 'footer.php';?>