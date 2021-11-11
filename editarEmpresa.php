<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php 
//edição de dados
if(isset($_GET['codEmpresa'])){
    $acao="Editar";
    
    $crud= new Crud();
    
    $BFetch=$crud->selectIdDB("*","empresa","codEmpresa=?",array($_GET['codEmpresa']));
    $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
    $codEmpresa=$Fetch['codEmpresa'];
    $nomeEmpresa=$Fetch['nomeEmpresa'];
    $cnpj=$Fetch['cnpj'];
    $cidade=$Fetch['cidade'];
    
            
//cadastro novo            
}else{
  $acao="Cadastrar";
  $codEmpresa=0;
  $nomeEmpresa="";
  $cnpj="";  
  $cidade="";  
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
                <li class="breadcrumb-item"><a href="empresa.php">Empresa</a></li>
               <li class="breadcrumb-item active"><?php echo $acao;?> empresa</li>
            </ol>
          </div>                   
        </div><!-- /.row -->
          
          
       <!-- Horizontal Form -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> <?php echo $acao;?> empresa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form class="form-empresa" name="empesa" id="empresa" method="post" action="Controlles/controllerEmpresa.php">
                 
                 <input type="hidden" id="acao" name="acao" value="<?php echo $acao?>">
                 <input type="hidden" id="codEmpresa" name="codEmpresa" value="<?php echo $codEmpresa?>">
                 
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputnome" class="col-sm-2 col-form-label">Nome empresa :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nomeEmpresa" class="form-control" value="<?php echo $nomeEmpresa?>" placeholder="Nome Empresa" required>
                    </div>
                  </div>
                    
                  <div class="form-group row">
                    <label for="inputcnpj" class="col-sm-2 col-form-label">Cnpj :</label>
                    <div class="col-sm-10">
                      <input type="text" name="cnpj" class="form-control" value="<?php echo $cnpj?>" placeholder="Cnpj" required>
                    </div>
                  </div>
                    
                  <div class="form-group row">
                    <label for="inputcnpj" class="col-sm-2 col-form-label">Cidade :</label>
                    <div class="col-sm-10">
                      <input type="text" name="cidade" class="form-control" value="<?php echo $cidade?>"  placeholder="Cidade" required>
                    </div>
                  </div>  
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">                      
                  <button type="submit" class="btn btn-info float-left" value="<?php echo $acao?>"> &nbsp; &nbsp;Salvar &nbsp; &nbsp;</button>                                     
                  <a href="empresa.php"><button  type="button" class="btn btn-default float-right">Cancelar</button></a>                 
               </div>
                  
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
  </div>
  </div>
  
          
            
       <?php require 'footer.php';?>