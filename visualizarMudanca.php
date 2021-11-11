<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
$crud = new Crud();

$codMudanca = filter_input(INPUT_GET, 'codMudanca', FILTER_SANITIZE_SPECIAL_CHARS);

$BFetch = $crud->selectIdDB(
        "lm.codMudanca, m.nomeMaquina, t.tipo, lm.dataMudanca, lm.tipoMudanca, lm.codEmpresaAnterior, lm.codEmpresaNova, lm.codDepartamentoAnterior, lm.codDepartamentoNovo",
        "logmudanca lm, maquina m , tipoMaquina t",
        "lm.codMaquina=m.codMaquina "
        . "and m.codTipoMaquina=t.codTipoMaquina "
        . "and codMudanca=?",
        array($codMudanca)
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
                        <li class="breadcrumb-item"><a href="mudanca.php">Mudança</a></li>
                        <li class="breadcrumb-item active">Visualizar mudança</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->


            <!-- Horizontal Form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados da Mudança</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-marca" name="mudanca" id="mudanca" method="post" action="Controlles/controllerMudanca.php">

                    <input type="hidden" name="tipoMudanca" class="form-control" value="<?php $tipoMudanca = $Fetch['tipoMudanca'] ?>">

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Nome Maquina :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeMaquina" class="form-control" value="<?php echo $Fetch['nomeMaquina'] ?>" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Tipo maquina :</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipo" class="form-control" value="<?php echo $Fetch['tipo'] ?>" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Data mudanca :</label>
                            <div class="col-sm-10">
                                <input type="text" name="dataMudanca" class="form-control" value="<?php echo $Fetch['dataMudanca'] ?>" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Tipo mudança :</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipoMudanca" class="form-control" value="<?php echo $Fetch['tipoMudanca'] ?>" readonly="readonly">
                            </div>
                        </div>

                      <?php if ($tipoMudanca == 'Empresa') { ?>

                            <div class="form-group row">
                                <label for="inputnome" class="col-sm-2 col-form-label">Empresa anterior :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="codEmpresaAnterior" class="form-control" value="<?php echo $Fetch['codEmpresaAnterior'] ?>" readonly="readonly">
                                </div>
                            </div>

                          
                            <div class="form-group row">
                                <label for="inputnome" class="col-sm-2 col-form-label">Empresa nova :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="codEmpresaNova" class="form-control" value="<?php echo $Fetch['codEmpresaNova'] ?>" readonly="readonly">
                                </div>
                            </div>

                        <?php } else { ?>

                            <div class="form-group row">
                                <label for="inputnome" class="col-sm-2 col-form-label">Departamento anterior :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="codDepartamentoAnterior" class="form-control" value="<?php echo $Fetch['codDepartamentoAnterior'] ?>" readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputnome" class="col-sm-2 col-form-label">Departamento novo :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="codDepartamentoNovo" class="form-control" value="<?php echo $Fetch['codDepartamentoNovo'] ?>" readonly="readonly">
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">                                                          
                        <a href="mudanca.php"><button  type="button" class="btn btn-default float-right">&nbsp;&nbsp;&nbsp;&nbsp;Sair&nbsp;&nbsp;&nbsp;&nbsp;</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>

