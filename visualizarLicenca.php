<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
$crud = new Crud();

$codLicenca = filter_input(INPUT_GET, 'codLicenca', FILTER_SANITIZE_SPECIAL_CHARS);

$BFetch = $crud->selectIdDB(
        "*",
        "licenca",
        "codLicenca=?",
        array($codLicenca)
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
                        <li class="breadcrumb-item"><a href="Licença.php">Licença</a></li>
                        <li class="breadcrumb-item active">Visualizar licença</li>
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

                <form class="form-marca" name="licenca" id="marca" method="post" action="Controlles/controllerLicenca.php">

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Licença :</label>
                            <div class="col-sm-10">
                                <input type="text" name="licenca" class="form-control" value="<?php echo $Fetch['licenca'] ?>" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Categoria :</label>
                            <div class="col-sm-10">
                                <input type="text" name="categoria" class="form-control" value="<?php echo $Fetch['categoria'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Quantidade :</label>
                            <div class="col-sm-10">
                                <input type="text" name="quantidade" class="form-control" value="<?php echo $Fetch['quantidade'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Em uso :</label>
                            <div class="col-sm-10">
                                <input type="text" name="emUso" class="form-control" value="<?php echo $Fetch['emUso'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                        
                         <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Sobressalente :</label>
                            <div class="col-sm-10">
                                <input type="text" name="sobressalente" class="form-control" value="<?php echo $Fetch['sobressalente'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                          <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Número Série :</label>
                            <div class="col-sm-10">
                                <input type="text" name="numeroSerie" class="form-control" value="<?php echo $Fetch['numeroSerie'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                            <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Vencimento :</label>
                            <div class="col-sm-10">
                                <input type="text" name="vencimento" class="form-control" value="<?php echo $Fetch['vencimento'] ?>" readonly="readonly">
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">                                                          
                        <a href="licenca.php"><button  type="button" class="btn btn-default float-right">&nbsp;&nbsp;&nbsp;&nbsp;Sair&nbsp;&nbsp;&nbsp;&nbsp;</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>

