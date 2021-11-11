<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
$crud = new Crud();

$codRoteador = filter_input(INPUT_GET, 'codRoteador', FILTER_SANITIZE_SPECIAL_CHARS);

$BFetch = $crud->selectIdDB(
        "*",
        "roteadores",
        "codRoteador=?",
        array($codRoteador)
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
                        <li class="breadcrumb-item"><a href="roteadores.php">Roteador</a></li>
                        <li class="breadcrumb-item active">Visualizar roteador</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->


            <!-- Horizontal Form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados do roteador</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-marca" name="roteador" id="marca" method="post" action="Controlles/controllerRoteador.php">

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Marca :</label>
                            <div class="col-sm-10">
                                <input type="text" name="marca" class="form-control" value="<?php echo $Fetch['marca'] ?>" readonly="readonly">
                            </div>
                        </div>
                 
                        
                           <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Usuário :</label>
                            <div class="col-sm-10">
                                <input type="text" name="usuario" class="form-control" value="<?php echo $Fetch['usuario'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                          
                           <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Senha :</label>
                            <div class="col-sm-10">
                                <input type="text" name="senha" class="form-control" value="<?php echo $Fetch['senha'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                            
                           <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Nome da rede :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeRede" class="form-control" value="<?php echo $Fetch['nomeRede'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                           <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Senha Wi-fi :</label>
                            <div class="col-sm-10">
                                <input type="text" name="senhaWifi" class="form-control" value="<?php echo $Fetch['senhaWifi'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                            <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Local :</label>
                            <div class="col-sm-10">
                                <input type="text" name="local" class="form-control" value="<?php echo $Fetch['local'] ?>" readonly="readonly">
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">                                                          
                        <a href="roteadores.php"><button  type="button" class="btn btn-default float-right">&nbsp;&nbsp;&nbsp;&nbsp;Sair&nbsp;&nbsp;&nbsp;&nbsp;</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>

