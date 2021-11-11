<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

    <?php
    
    $crud = new Crud();

    $codUsuario = filter_input(INPUT_GET,'codUsuario', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $BFetch=$crud->selectIdDB(
            "*",
            "usuario",
            "codUsuario=?",
            array($codUsuario)
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
                <li class="breadcrumb-item"><a href="usuario.php">Empresa</a></li>
               <li class="breadcrumb-item active">Visualizar Usuário</li>
            </ol>
          </div>                   
        </div><!-- /.row -->
          
          
       <!-- Horizontal Form -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dados do Usuário</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form class="form-usuario" name="usuario" id="empresa" method="post" action="Controlles/controllerUsuario.php">
                 
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputnome" class="col-sm-2 col-form-label">Nome Usuário :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nomeUsuario" class="form-control" value="<?php echo $Fetch['nomeUsuario']?>" readonly="readonly">
                    </div>
                  </div>
                    
                  <div class="form-group row">
                    <label for="inputcnpj" class="col-sm-2 col-form-label">Login :</label>
                    <div class="col-sm-10">
                      <input type="text" name="login" class="form-control" value="<?php echo $Fetch['login']?>" readonly="readonly">
                    </div>
                  </div>
                    
                  <div class="form-group row">
                    <label for="inputcnpj" class="col-sm-2 col-form-label">Senha :</label>
                    <div class="col-sm-10">
                      <input type="text" name="senha" class="form-control" value="<?php echo $Fetch['senha']?>" readonly="readonly">
                    </div>
                  </div>  
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">                                                          
                    <a href="usuario.php"><button  type="button" class="btn btn-default float-right">&nbsp;&nbsp;&nbsp;&nbsp;Sair&nbsp;&nbsp;&nbsp;&nbsp;</button></a>                 
               </div>
                  
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
  </div>
  </div>
  
          
            
       <?php require 'footer.php';?>
