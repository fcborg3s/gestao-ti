<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
$crud = new Crud();

$codServidor = filter_input(INPUT_GET, 'codServidor', FILTER_SANITIZE_SPECIAL_CHARS);

$BFetch = $crud->selectIdDB(
        "s.codServidor, s.ipServidor, s.servico, e.nomeEmpresa, s.usuarioServidor, "
        . "s.senhaServidor, s.sistemaOperacional, s.portaLocal, s.portaExterna ",
        "servidores s, empresa e",
        "s.codEmpresa=e.codEmpresa "
        . "and  codServidor=?",
        array($codServidor)
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
                        <li class="breadcrumb-item"><a href="Servidor.php">Servidor</a></li>
                        <li class="breadcrumb-item active">Visualizar servidor</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->


            <!-- Horizontal Form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados do servidor</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-marca" name="servidores" id="marca" method="post" action="Controlles/controllerServidor.php">

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Ip servidor :</label>
                            <div class="col-sm-10">
                                <input type="text" name="ipServidor" class="form-control" value="<?php echo $Fetch['ipServidor'] ?>" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Serviço :</label>
                            <div class="col-sm-10">
                                <input type="text" name="servico" class="form-control" value="<?php echo $Fetch['servico'] ?>" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Nome empresa :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeEmpresa" class="form-control" value="<?php echo $Fetch['nomeEmpresa'] ?>" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Usuário :</label>
                            <div class="col-sm-10">
                                <input type="text" name="usuarioServidor" class="form-control" value="<?php echo $Fetch['usuarioServidor'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Senha :</label>
                            <div class="col-sm-10">
                                <input type="text" name="senhaServidor" class="form-control" value="<?php echo $Fetch['senhaServidor'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Sistema operacional :</label>
                            <div class="col-sm-10">
                                <input type="text" name="sistemaOperacional" class="form-control" value="<?php echo $Fetch['sistemaOperacional'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                          <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Porta local :</label>
                            <div class="col-sm-10">
                                <input type="text" name="portaLocal" class="form-control" value="<?php echo $Fetch['portaLocal'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                          <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Porta externa :</label>
                            <div class="col-sm-10">
                                <input type="text" name="portaExterna" class="form-control" value="<?php echo $Fetch['portaExterna'] ?>" readonly="readonly">
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">                                                          
                        <a href="servidores.php"><button  type="button" class="btn btn-default float-right">&nbsp;&nbsp;&nbsp;&nbsp;Sair&nbsp;&nbsp;&nbsp;&nbsp;</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>



