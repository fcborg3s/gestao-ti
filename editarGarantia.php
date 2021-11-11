<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
//edição de dados
if (isset($_GET['codGarantia'])) {
    $acao = "Editar";

    $crud = new Crud();

    $BFetch = $crud->selectIdDB("*", "garantia", "codGarantia=?", array($_GET['codGarantia']));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    $codGarantia = $Fetch['codGarantia'];
    $codMaquina = $Fetch['codMaquina'];
    $dataInicio = $Fetch['dataInicio'];
    $notaFiscal = $Fetch['notaFiscal'];
    $dataTermino = $Fetch['dataTermino'];


//cadastro novo            
} else {
    $acao = "Cadastrar";
    $codGarantia = 0;
    $codMaquina = "";
    $dataInicio = "";
    $notaFiscal = "";
    $dataTermino = "";
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
                        <li class="breadcrumb-item"><a href="garantia.php">Garantia</a></li>
                        <li class="breadcrumb-item active"><?php echo $acao; ?> garantia</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->


            <!-- Horizontal Form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> <?php echo $acao; ?> Garantia</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-empresa" name="garantia" id="garantia" method="post" action="Controlles/controllerGarantia.php">

                    <input type="hidden" id="acao" name="acao" value="<?php echo $acao ?>">
                    <input type="hidden" id="codGarantia" name="codGarantia" value="<?php echo $codGarantia ?>">

                    <div class="card-body">

                        <?php if ($acao == 'Editar') { ?>

                            <?php
                            $BFetch = $crud->selectIdDB(
                                    "g.codGarantia, m.nomeMaquina",
                                    "garantia g, maquina m",
                                    "g.codMaquina=m.codMaquina "
                                    . "and g.codGarantia=? ",
                                    array($codGarantia)
                            );
                            $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
                            ?>

                            <div class="form-group row">
                                <label for="inputnomeMaquina" class="col-sm-2 col-form-label">Nome maquina :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nomeMaquina" class="form-control" value="<?php echo $Fetch['nomeMaquina'] ?>" readonly="readonly" >
                                </div>
                            </div>
                        <?php } else { ?>

                            <div class="form-group row">  
                                <label for="inputSelect" class="col-sm-2 col-form-label">Nome maquina :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="codMaquina"  required>
                                        <option value="" selected >Selecione tipo Maquina</option>                    

                                        <?php
                                        $crud = new Crud();

                                        $BFetch = $crud->selectDB(
                                                "*",
                                                "maquina",
                                                "",
                                                array()
                                        );

                                        while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <option value="<?php echo $Fetch['codMaquina']; ?>"><?php echo $Fetch['nomeMaquina']; ?></option>

                                            <?php
                                        }
                                        ?>

                                    </select>
                                </div>    
                            </div>

                        <?php } ?>


                        <div class="form-group row">
                            <label for="inputdataInicio" class="col-sm-2 col-form-label">Data Aquisicão :</label>
                            <div class="col-sm-10">
                                <input type="date" name="dataInicio" class="form-control" value="<?php echo $dataInicio ?>"  required>
                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="inputnotaFiscal" class="col-sm-2 col-form-label">Nota fiscal :</label>
                            <div class="col-sm-10">
                                <input type="text" name="notaFiscal" class="form-control" value="<?php echo $notaFiscal ?>" placeholder="Nota Fiscal" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputdataTermino" class="col-sm-2 col-form-label">Data Termino :</label>
                            <div class="col-sm-10">
                                <input type="date" name="dataTermino" class="form-control" value="<?php echo $dataTermino ?>" >
                            </div>
                        </div>  


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">                      
                        <button type="submit" class="btn btn-info float-left" value="<?php echo $acao ?>"> &nbsp; &nbsp;Salvar &nbsp; &nbsp;</button>                                     
                        <a href="garantia.php"><button  type="button" class="btn btn-default float-right">Cancelar</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>

