<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
$crud = new Crud();

$codCustoFixo = filter_input(INPUT_GET, 'codCustoFixo', FILTER_SANITIZE_SPECIAL_CHARS);

$BFetch = $crud->selectIdDB(
        "c.codCustoFixo, c.nomeServico, e.nomeEmpresa, c.qtLicenca, c.tipo, "
        . "c.valorMensal ",
        "custofixo c, empresa e",
        "c.codEmpresa=e.codEmpresa "
        . "and  codCustoFixo=?",
        array($codCustoFixo)
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
                        <li class="breadcrumb-item"><a href="custoFixo.php">Custo fixo</a></li>
                        <li class="breadcrumb-item active">Visualizar Custo fixo</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->


            <!-- Horizontal Form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados Custo fixo</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-dvrs" name="custofixo" id="marca" method="post" action="Controlles/controllerCustoFixo.php">

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Nome :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeServico" class="form-control" value="<?php echo $Fetch['nomeServico'] ?>" readonly="readonly">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Nome empresa :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeEmpresa" class="form-control" value="<?php echo $Fetch['nomeEmpresa'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Qt licenças :</label>
                            <div class="col-sm-10">
                                <input type="text" name="qtLicenca" class="form-control" value="<?php echo $Fetch['qtLicenca'] ?>" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Tipo :</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipo" class="form-control" value="<?php echo $Fetch['tipo'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Valor mensal :</label>
                            <div class="col-sm-10">
                                <input type="text" name="valorMensal" class="form-control" value="<?php echo $Fetch['valorMensal'] ?>" readonly="readonly">
                            </div>
                        </div>
                                                                                   
              

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">                                                          
                        <a href="custoFixo.php"><button  type="button" class="btn btn-default float-right">&nbsp;&nbsp;&nbsp;&nbsp;Sair&nbsp;&nbsp;&nbsp;&nbsp;</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>





