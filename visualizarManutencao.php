<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>
<?php


$crud = new Crud();

$codManutencao = filter_input(INPUT_GET, 'codManutencao', FILTER_SANITIZE_SPECIAL_CHARS);

$BFetch = $crud->selectIdDB(
          "mt.codManutencao, m.nomeMaquina, t.tipo, e.nomeEmpresa, d.nomeDepartamento, mt.dataRecebimento, mt.descricaoProblema",
          "manutencao mt, maquina m, tipomaquina t, empresa e, departamento d",
          "mt.codMaquina=m.codMaquina "
        . "and m.codTipoMaquina=t.codTipoMaquina "
        . "and m.codEmpresa=e.codEmpresa "
        . "and m.codDepartamento=d.codDepartamento "
        . "and mt.codManutencao=?",
        array($codManutencao)
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
                        <li class="breadcrumb-item"><a href="maquina.php">Empresa</a></li>
                        <li class="breadcrumb-item active">Visualizar Manutenção</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->


            <!-- Horizontal Form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados da Manutenção</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-empresa" name="manutencao" id="empresa" method="post" action="Controlles/controllerMaqui.php">

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputmaquina" class="col-sm-2 col-form-label">Nome maquina :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeMaquina" class="form-control" value="<?php echo $Fetch['nomeMaquina'] ?>" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputtipo" class="col-sm-2 col-form-label">Tipo maquina :</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipo" class="form-control" value="<?php echo $Fetch['tipo'] ?>" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputnomeEmpresa" class="col-sm-2 col-form-label">Empresa :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeEpresa" class="form-control" value="<?php echo $Fetch['nomeEmpresa'] ?>" readonly="readonly">
                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="inputnomeDepartamento" class="col-sm-2 col-form-label">Departamento :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeDepartamento" class="form-control" value="<?php echo $Fetch['nomeDepartamento'] ?>" readonly="readonly">
                            </div>
                        </div>  


                        <div class="form-group row">
                            <label for="inputMarca" class="col-sm-2 col-form-label">Data Recebimento :</label>
                            <div class="col-sm-10">
                                <input type="text" name="dataRecebimento" class="form-control" value="<?php echo $Fetch['dataRecebimento'] ?>" readonly="readonly">
                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="inputModelo" class="col-sm-2 col-form-label">Descricao Problema :</label>                           
                             <div class="col-sm-10">
                                <input type="text" name="descricaoProblema" class="form-control" value="<?php echo $Fetch['descricaoProblema'] ?>" readonly="readonly">
                            </div>
                        </div>  


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">                                                          
                        <a href="manutencao.php"><button  type="button" class="btn btn-default float-right">&nbsp;&nbsp;&nbsp;&nbsp;Sair&nbsp;&nbsp;&nbsp;&nbsp;</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>
