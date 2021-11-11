<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

    <?php
    
    $crud = new Crud();

    $codTipoMaquina = filter_input(INPUT_GET,'codTipoMaquina', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $BFetch=$crud->selectIdDB(
            "*",
            "tipomaquina",
            "codTipoMaquina=?",
            array($codTipoMaquina)
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
                <li class="breadcrumb-item"><a href="tipoMaquina.php">Tipo Maquina</a></li>
               <li class="breadcrumb-item active">Visualizar tipo maquina</li>
            </ol>
          </div>                   
        </div><!-- /.row -->
          
          
       <!-- Horizontal Form -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dados tipo maquina</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form class="form-marca" name="maquina" id="maquina" method="post" action="Controlles/controllerTipoMaquina.php">
                 
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputnome" class="col-sm-2 col-form-label">Tipo maquina :</label>
                    <div class="col-sm-10">
                        <input type="text" name="tipoMaquina" class="form-control" value="<?php echo $Fetch['tipo']?>" readonly="readonly">
                    </div>
                  </div>
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">                                                          
                    <a href="tipoMaquina.php"><button  type="button" class="btn btn-default float-right">&nbsp;&nbsp;&nbsp;&nbsp;Sair&nbsp;&nbsp;&nbsp;&nbsp;</button></a>                 
               </div>
                  
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
  </div>
  </div>
  
          
            
       <?php require 'footer.php';?>

