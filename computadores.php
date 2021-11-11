<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>


<!--Estrutura de loop-->
<?php
$crud = new Crud();
$BFetch = $crud->selectIdDB(
        "count(codMaquina), sum(valor)",
        "maquina",
        "codTipoMaquina in(6,7) ",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    $vlComputadores = $Fetch['sum(valor)'];
    $qtMaquina = $Fetch['count(codMaquina)'];
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->         
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Computadores</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->




    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-desktop"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Qt computadores </span>
                            <span class="info-box-number"><?php echo $qtMaquina ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-dollar-sign"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Valor R$ </span>
                            <span class="info-box-number"><?php echo $vlComputadores ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->


            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card bg-gradient-primary"> 
                            <div class="card-header border-0">  
                                <h3 class="card-title">Computadores</h3>

                                <div class="card-tools">

                                </div>
                            </div> 
                        </div>


                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">

                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Empresa</th>  
                                        <th>Usuário</th> 
                                        <th>Departametno</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <!--Estrutura de loop-->
<?php
$crud = new Crud();
$BFetch = $crud->selectIdDB(
        "m.codMaquina, m.nomeMaquina, m.nomeUsuario, e.nomeEmpresa, d.nomeDepartamento",
        "maquina m, empresa e, departamento d",
        "m.codEmpresa=e.codEmpresa and m.codDepartamento=d.codDepartamento and m.codEstadoMaquina=1 "
        . "and codTipoMaquina in(6,7)",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    ?> 


                                        <tr>
                                            <td><?php echo $Fetch['nomeMaquina']; ?></td>
                                            <td><?php echo $Fetch['nomeEmpresa']; ?></td> 
                                            <td><?php echo $Fetch['nomeUsuario']; ?></td> 
                                            <td><?php echo $Fetch['nomeDepartamento']; ?></td> 

                                            <td>   
                                                <a class="btn btn-success" href="<?php echo "visualizarMaquina.php?codMaquina={$Fetch['codMaquina']}" ?>" title="Visualizar"> 
                                                    <i class="fa fa-search "></i> 
                                                </a> 
                                                <a class="btn btn-info" href="<?php echo "editarManutencao.php?codMaquina={$Fetch['codMaquina']}" ?>" title="Manutencão"> 
                                                    <i class="fa fa-cogs "></i> 
                                                </a>       
                                            </td>
                                        </tr>

    <?PHP
}
?>



                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
</div>


<?php require 'footer.php'; ?>
