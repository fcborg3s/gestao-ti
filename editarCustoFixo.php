<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
//edição de dados
if (isset($_GET['codCustoFixo'])) {
    $acao = "Editar";

    $crud = new Crud();

    $BFetch = $crud->selectIdDB("*", "custofixo", "codCustoFixo=?", array($_GET['codCustoFixo']));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    $codCustoFixo = $Fetch['codCustoFixo'];
    $nomeServico = $Fetch['nomeServico'];
    $codEmpresa = $Fetch['codEmpresa'];
    $qtLicenca = $Fetch['qtLicenca'];
    $tipo = $Fetch['tipo'];
    $valorMensal = $Fetch['valorMensal'];


//cadastro novo            
} else {
    $acao = "Cadastrar";
    $codCustoFixo = 0;
    $nomeServico = "";
    $codEmpresa = "";
    $qtLicenca = "";
    $tipo = "";
    $valorMensal = "";
   
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
                        <li class="breadcrumb-item"><a href="custoFixo.php">Custo fixo</a></li>
                        <li class="breadcrumb-item active"><?php echo $acao; ?> Custo fixo</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->


            <!-- Horizontal Form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> <?php echo $acao; ?> Custo Fixo</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-custofixo" name="custofixo" id="dvrs" method="post" action="Controlles/controllerCustoFixo.php">

                    <input type="hidden" id="acao" name="acao" value="<?php echo $acao ?>">
                    <input type="hidden" id="codCustoFixo" name="codCustoFixo" value="<?php echo $codCustoFixo ?>">

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Nome :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeServico" class="form-control" value="<?php echo $nomeServico ?>" placeholder="Nome" required>
                            </div>
                        </div>                                                                
                                                                               

                        <div class="form-group row">  
                            <label for="inputSelect" class="col-sm-2 col-form-label">Empresa :</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="codEmpresa"  required>
                                    <option value="" selected >Selecione a empresa</option>                    

                                    <?php
                                    $crud = new Crud();

                                    $BFetch = $crud->selectDB(
                                            "*",
                                            "empresa",
                                            "",
                                            array()
                                    );

                                    while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                        <option value="<?php echo $Fetch['codEmpresa']; ?>"><?php echo $Fetch['nomeEmpresa']; ?></option>

                                        <?php
                                    }
                                    ?>

                                </select>
                            </div>    
                        </div>
                        
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Qt Licenças :</label>
                            <div class="col-sm-10">
                                <input type="text" name="qtLicenca" class="form-control" value="<?php echo $qtLicenca ?>" placeholder="Qt licença" required>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Tipo :</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipo" class="form-control" value="<?php echo $tipo ?>" placeholder="Tipo " required>
                            </div>
                        </div>   

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Valor Mensal :</label>
                            <div class="col-sm-10">
                                <input type="text" name="valorMensal" class="form-control" value="<?php echo $valorMensal ?>" placeholder="valorMensal" required>
                            </div>
                        </div>                                                               

                    </div>


                    <!-- /.card-body -->

                    <div class="card-footer">                      
                        <button type="submit" class="btn btn-info float-left" value="<?php echo $acao ?>"> &nbsp; &nbsp;Salvar &nbsp; &nbsp;</button>                                     
                        <a href="custoFixo.php"><button  type="button" class="btn btn-default float-right">Cancelar</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>

