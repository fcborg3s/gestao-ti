<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
//edição de dados
if (isset($_GET['codLicenca'])) {
    $acao = "Editar";

    $crud = new Crud();

    $BFetch = $crud->selectIdDB("*", "licenca", "codLicenca=?", array($_GET['codLicenca']));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    $codLicenca = $Fetch['codLicenca'];
    $licenca = $Fetch['licenca'];
    $categoria = $Fetch['categoria'];
    $quantidade = $Fetch['quantidade'];
    $emUso = $Fetch['emUso'];
    $sobressalente = $Fetch['sobressalente'];
    $numeroSerie = $Fetch['numeroSerie'];
    $vencimento = $Fetch['vencimento'];

//cadastro novo            
} else {
    $acao = "Cadastrar";
    $codLicenca = 0;
    $licenca = "";
    $categoria = "";
    $quantidade = "";
    $emUso = "";
    $sobressalente = "";
    $numeroSerie = "";
    $vencimento = "";
}
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
                        <li class="breadcrumb-item"><a href="licenca.php">Licença</a></li>
                        <li class="breadcrumb-item active"><?php echo $acao; ?> licença</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->


            <!-- Horizontal Form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> <?php echo $acao; ?> licença</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-licenca" name="licenca" id="marca" method="post" action="Controlles/controllerLicenca.php">

                    <input type="hidden" id="acao" name="acao" value="<?php echo $acao ?>">
                    <input type="hidden" id="codLicenca" name="codLicenca" value="<?php echo $codLicenca ?>">

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Licença :</label>
                            <div class="col-sm-10">
                                <input type="text" name="licenca" class="form-control" value="<?php echo $licenca ?>" placeholder="Licença" required>
                            </div>
                        </div>    

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Categoria :</label>
                            <div class="col-sm-10">
                                <input type="text" name="categoria" class="form-control" value="<?php echo $categoria ?>" placeholder="Categoria" required>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Quantidade :</label>
                            <div class="col-sm-10">
                                <input type="number" name="quantidade" class="form-control" value="<?php echo $quantidade ?>" placeholder="quantidade" required>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Em uso :</label>
                            <div class="col-sm-10">
                                <input type="number" name="emUso" class="form-control" value="<?php echo $emUso ?>" placeholder="Em uso" required>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Sobressalente :</label>
                            <div class="col-sm-10">
                                <input type="number" name="sobressalente" class="form-control" value="<?php echo $sobressalente ?>" placeholder="Sobressalente" required>
                            </div>
                        </div> 
                        
                        
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Número série :</label>
                            <div class="col-sm-10">
                                <input type="text" name="numeroSerie" class="form-control" value="<?php echo $numeroSerie ?>" placeholder="Número série" required>
                            </div>
                        </div> 
                        
                            
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Vencimento :</label>
                            <div class="col-sm-10">
                                <input type="date" name="vencimento" class="form-control" value="<?php echo $vencimento ?>" placeholder="Vencimento" required>
                            </div>
                        </div> 


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">                      
                        <button type="submit" class="btn btn-info float-left" value="<?php echo $acao ?>"> &nbsp; &nbsp;Salvar &nbsp; &nbsp;</button>                                     
                        <a href="licenca.php"><button  type="button" class="btn btn-default float-right">Cancelar</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>