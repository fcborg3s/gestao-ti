<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

    <?php
    
    $crud = new Crud();

    $codMarca = filter_input(INPUT_GET,'codMarca', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $BFetch=$crud->selectIdDB(
            "*",
            "marca",
            "codMarca=?",
            array($codMarca)
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
                <li class="breadcrumb-item"><a href="marca.php">Marca</a></li>
               <li class="breadcrumb-item active">Visualizar marca</li>
            </ol>
          </div>                   
        </div><!-- /.row -->
          
          
       <!-- Horizontal Form -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dados da Marca</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form class="form-marca" name="marca" id="marca" method="post" action="Controlles/controllerMarca.php">
                 
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputnome" class="col-sm-2 col-form-label">Nome Marca :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nomeMarca" class="form-control" value="<?php echo $Fetch['nomeMarca']?>" readonly="readonly">
                    </div>
                  </div>
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">                                                          
                    <a href="Marca.php"><button  type="button" class="btn btn-default float-right">&nbsp;&nbsp;&nbsp;&nbsp;Sair&nbsp;&nbsp;&nbsp;&nbsp;</button></a>                 
               </div>
                  
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
  </div>
  </div>
  
          
            
       <?php require 'footer.php';?>

