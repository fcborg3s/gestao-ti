<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>


<!--Estrutura de loop-->
<?php
$crud = new Crud();
$BFetch = $crud->selectDB(
        "count(codMaquina), sum(valor)",
        "maquina",
        "",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    $qtMaquina = $Fetch['count(codMaquina)'];
    $vlMaquinas = $Fetch['sum(valor)'];
}
?>


<!--Estrutura de loop-->
<?php
$BFetch = $crud->selectDB(
        "sum(valor)",
        "manutencao",
        "",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    $vlManutencao = $Fetch['sum(valor)'];
}
?>


<!--Estrutura de loop-->
<?php
$BFetch = $crud->selectIdDB(
        "sum(valor)",
        "maquina",
        "codSituacao=5 ",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    $vlAquisicao = $Fetch['sum(valor)'];
}
?>


<!--Estrutura de loop-->
<?php
$BFetch = $crud->selectDB(
        "sum(valorMensal)",
        "custofixo",
        "",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    $custoMensal = $Fetch['sum(valorMensal)'];
}
?>

<!--Estrutura de loop-->
<?php
$crud = new Crud();
$BFetch = $crud->selectIdDB(
        "count(codManutencao)",
        "manutencao",
        "status=0 ",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    $totalmanutencao = $Fetch['count(codManutencao)'];
}
?>

<!--Estrutura de loop-->
<?php
$crud = new Crud();
$BFetch = $crud->selectIdDB(
        "count(codMaquina)",
        "maquina",
        "codSituacao=6 ",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    $upgrade = $Fetch['count(codMaquina)'];
}
?>

<!--Estrutura de loop-->
<?php
$crud = new Crud();
$BFetch = $crud->selectIdDB(
        "count(codMaquina)",
        "maquina",
        "codSituacao in (8,9) ",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    $substitui = $Fetch['count(codMaquina)'];
}
?>


<!--Estrutura de loop-->
<?php
$crud = new Crud();
$BFetch = $crud->selectIdDB(
        "count(codMaquina)",
        "maquina",
        "codEmpresa=18 ",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    $maquinaCeara = $Fetch['count(codMaquina)'];
}
?>

<!--Estrutura de loop-->
<?php
$crud = new Crud();
$BFetch = $crud->selectIdDB(
        "count(codMaquina)",
        "maquina",
        "codEmpresa=19 ",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    $maquinaDist = $Fetch['count(codMaquina)'];
}
?>

<!--Estrutura de loop-->
<?php
$crud = new Crud();
$BFetch = $crud->selectIdDB(
        "count(codMaquina)",
        "maquina",
        "codEmpresa=20 ",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    $maquinaHaras = $Fetch['count(codMaquina)'];
}
?>


<!--Estrutura de loop-->
<?php
$crud = new Crud();
$BFetch = $crud->selectIdDB(
        "count(codMaquina)",
        "maquina",
        "codEmpresa=21 ",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    $maquinaRanFit = $Fetch['count(codMaquina)'];
}
?>

<!--Estrutura de loop-->
<?php
$crud = new Crud();
$BFetch = $crud->selectIdDB(
        "count(codMaquina)",
        "maquina",
        "codEmpresa=22 ",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    $maquinaRanSup = $Fetch['count(codMaquina)'];
}
?>

<!--Estrutura de loop-->
<?php
$crud = new Crud();
$BFetch = $crud->selectIdDB(
        "count(codMaquina)",
        "maquina",
        "codEmpresa=24 ",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    $maquinaPostoI = $Fetch['count(codMaquina)'];
}
?>

<!--Estrutura de loop-->
<?php
$crud = new Crud();
$BFetch = $crud->selectIdDB(
        "count(codMaquina)",
        "maquina",
        "codEmpresa=25 ",
        array()
);

while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    $maquinaPostoII = $Fetch['count(codMaquina)'];
}
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->         
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    </ol>
                </div>          
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <!-- ./card-body -->
            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-3 col-6">
                        <div class="description-block border-right">
                            <h5 class="description-header"><?php echo $qtMaquina ?></h5>
                            <span class="description-text">Qt maquinas do grupo</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-6">
                        <div class="description-block border-right">
                            <h5 class="description-header"><?php echo $totalmanutencao ?></h5>
                            <span class="description-text">qt maquinas em manutenção</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-6">
                        <div class="description-block border-right">
                            <h5 class="description-header"><?php echo $upgrade ?></h5>
                            <span class="description-text">qt maquinas precisando de upgrade</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-6">
                        <div class="description-block">
                            <h5 class="description-header"><?php echo $substitui ?></h5>
                            <span class="description-text">qt maquinas a ser substituidas</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                </div>
                <!-- /.row -->
            </div>


            <br/>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3> R$  <?php echo $vlMaquinas ?></h3>
                            <p>Valor total maquinas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="maquina.php" class="small-box-footer">Mais informação <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>R$ <?php echo $vlManutencao ?></h3>

                            <p>Custo com Manutenção</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais informação <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>R$ <?php echo $vlAquisicao ?></h3>

                            <p>Custo com aquisições</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais informação <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>R$ <?php echo $custoMensal ?></h3>

                            <p>Custo fixo mensal</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais informação <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->          

            </div>
            <!-- /.row (main row) -->


            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">

                    <!-- /.col -->
                    <div class="col-md-4">
                        <p class="text-center">
                            <strong>Quantidade de maquinas por empresa</strong>
                        </p> 

                        <!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text"><b>Ceará Alimentos</b></span>
                            <span class="float-right"><b><?php echo $maquinaCeara ?></b></span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info" style="width: <?php echo $maquinaCeara ?>%"></div>
                            </div>
                        </div>


                        <!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text"><b>Distribuidora Maranhese</b></span>
                            <span class="float-right"><b><?php echo $maquinaDist ?></b></span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-warning" style="width: <?php echo $maquinaDist ?>%"></div>
                            </div>
                        </div>

                        <!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text"><b>Rancho Supermercado</b></span>
                            <span class="float-right"><b><?php echo $maquinaRanSup ?></b></span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger" style="width: <?php echo $maquinaRanSup ?>%"></div>
                            </div>
                        </div>

                        <!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text"><b>Auto Posto Rancho I</b></span>
                            <span class="float-right"><b><?php echo $maquinaPostoI ?></b></span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-secondary" style="width: <?php echo $maquinaPostoI ?>%"></div>
                            </div>
                        </div>

                        <!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text"><b>Auto Posto Rancho II</b></span>
                            <span class="float-right"><b><?php echo $maquinaPostoII ?></b></span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-secondary" style="width: <?php echo $maquinaPostoII ?>%"></div>
                            </div>
                        </div>   

                        <!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text"><b>Ranfit</b></span>
                            <span class="float-right"><b><?php echo $maquinaRanFit ?></b></span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" style="width: <?php echo $maquinaRanFit ?>%"></div>
                            </div>
                        </div>  

                        <!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text"><b>Haras Beatriz</b></span>
                            <span class="float-right"><b><?php echo $maquinaHaras ?></b></span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-secondary" style="width: <?php echo $maquinaHaras ?>%"></div>
                            </div>
                        </div>               

                        <!-- /.progress-group -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>

    </section>
    <!-- /.content -->
</div>


<?php require 'footer.php'; ?> 


