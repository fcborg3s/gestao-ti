<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

    <?php
    
    $crud = new Crud();

    $codSituacao = filter_input(INPUT_GET,'codSituacao', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $BFetch=$crud->selectIdDB(
            "*",
            "situacaoMaquina",
            "codSituacao=?",
            array($codSituacao)
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
                <li class="breadcrumb-item"><a href="situacaoMaquina.php">Marca</a></li>
               <li class="breadcrumb-item active">Visualizar situação Maquina</li>
            </ol>
          </div>                   
        </div><!-- /.row -->
          
          
       <!-- Horizontal Form -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dados da Situção</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form class="form-situacao" name="situacao" id="marca" method="post" action="Controlles/controllerSituacaoMaquina.php">
                 
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputnome" class="col-sm-2 col-form-label">Nome Marca :</label>
                    <div class="col-sm-10">
                        <input type="text" name="situacao" class="form-control" value="<?php echo $Fetch['situacao']?>" readonly="readonly">
                    </div>
                  </div>
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">                                                          
                    <a href="situacaoMaquina.php"><button  type="button" class="btn btn-default float-right">&nbsp;&nbsp;&nbsp;&nbsp;Sair&nbsp;&nbsp;&nbsp;&nbsp;</button></a>                 
               </div>
                  
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
  </div>
  </div>
  
          
            
       <?php require 'footer.php';?>

