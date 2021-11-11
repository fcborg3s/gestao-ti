<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
$crud = new Crud();

$codDvr = filter_input(INPUT_GET, 'codDvr', FILTER_SANITIZE_SPECIAL_CHARS);

$BFetch = $crud->selectIdDB(
        "d.codDvr, d.ipDvr, e.nomeEmpresa, d.local, d.nomeDvr, "
        . "d.senha, d.porta ",
        "dvrs d, empresa e",
        "d.codEmpresa=e.codEmpresa "
        . "and  codDvr=?",
        array($codDvr)
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
                        <li class="breadcrumb-item"><a href="dvrs.php">Servidor</a></li>
                        <li class="breadcrumb-item active">Visualizar Dvr</li>
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

                <form class="form-dvrs" name="dvrs" id="marca" method="post" action="Controlles/controllerDvr.php">

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Ip Dvr :</label>
                            <div class="col-sm-10">
                                <input type="text" name="ipDvr" class="form-control" value="<?php echo $Fetch['ipDvr'] ?>" readonly="readonly">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Nome empresa :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeEmpresa" class="form-control" value="<?php echo $Fetch['nomeEmpresa'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Local :</label>
                            <div class="col-sm-10">
                                <input type="text" name="loca" class="form-control" value="<?php echo $Fetch['local'] ?>" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Usuário :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeDvr" class="form-control" value="<?php echo $Fetch['nomeDvr'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Senha :</label>
                            <div class="col-sm-10">
                                <input type="text" name="senha" class="form-control" value="<?php echo $Fetch['senha'] ?>" readonly="readonly">
                            </div>
                        </div>
                                         
                        
                          <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Porta :</label>
                            <div class="col-sm-10">
                                <input type="text" name="porta" class="form-control" value="<?php echo $Fetch['porta'] ?>" readonly="readonly">
                            </div>
                        </div>
              

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">                                                          
                        <a href="dvrs.php"><button  type="button" class="btn btn-default float-right">&nbsp;&nbsp;&nbsp;&nbsp;Sair&nbsp;&nbsp;&nbsp;&nbsp;</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>




