<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

    <?php
    
    $crud = new Crud();

    $codEmpresa = filter_input(INPUT_GET,'codEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $BFetch=$crud->selectIdDB(
            "*",
            "empresa",
            "codEmpresa=?",
            array($codEmpresa)
    );
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    
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
               <li class="breadcrumb-item active">Visualizar Empresa</li>
            </ol>
          </div>                   
        </div><!-- /.row -->
          
          
       <!-- Horizontal Form -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dados da Empresa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form class="form-empresa" name="empesa" id="empresa" method="post" action="Controlles/controllerEmpresa.php">
                 
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputnome" class="col-sm-2 col-form-label">Nome empresa :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nomeEmpresa" class="form-control" value="<?php echo $Fetch['nomeEmpresa']?>" readonly="readonly">
                    </div>
                  </div>
                    
                  <div class="form-group row">
                    <label for="inputcnpj" class="col-sm-2 col-form-label">Cnpj :</label>
                    <div class="col-sm-10">
                      <input type="text" name="cnpj" class="form-control" value="<?php echo $Fetch['cnpj']?>" readonly="readonly">
                    </div>
                  </div>
                    
                  <div class="form-group row">
                    <label for="inputcnpj" class="col-sm-2 col-form-label">Cidade :</label>
                    <div class="col-sm-10">
                      <input type="text" name="cidade" class="form-control" value="<?php echo $Fetch['cidade']?>" readonly="readonly">
                    </div>
                  </div>  
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">                                                          
                  <a href="empresa.php"><button  type="button" class="btn btn-default float-right">&nbsp;&nbsp;&nbsp;&nbsp;Sair&nbsp;&nbsp;&nbsp;&nbsp;</button></a>                 
               </div>
                  
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
  </div>
  </div>
  
          
            
       <?php require 'footer.php';?>