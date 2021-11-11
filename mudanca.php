

<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
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
                        <li class="breadcrumb-item active">Mudanças</li>
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
                <div class="col-12">
                    <div class="card">

                        <div class="card bg-gradient-primary"> 
                            <div class="card-header border-0">  
                                <h3 class="card-title">Mudanças</h3>
                            
                                </div>
                            </div> 
                        </div>


                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">

                                <thead>
                                    <tr>
                                        <th>Nome maquina</th>
                                        <th>Tipo maquina</th>                   
                                        <th>Tipo mudança</th>
                                        <th>Data mudança</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <!--Estrutura de loop-->
                                    <?php
                                    $crud = new Crud();
                                    $BFetch = $crud->selectIdDB(
                                            "lm.codMudanca, m.nomeMaquina, lm.tipoMudanca, t.tipo, lm.dataMudanca",
                                            "logmudanca lm, maquina m, tipomaquina t",
                                            "lm.codMaquina=m.codMaquina and m.codtipoMaquina=t.codTipoMaquina",
                                            array()
                                    );

                                    while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
                                        ?> 


                                        <tr>
                                            <td><?php echo $Fetch['nomeMaquina']; ?></td>
                                            <td><?php echo $Fetch['tipo']; ?></td> 
                                            <td><?php echo $Fetch['tipoMudanca']; ?></td> 
                                            <td><?php echo $Fetch['dataMudanca']; ?></td> 

                                            <td>   
                                                <a class="btn btn-success" href="<?php echo "visualizarMudanca.php?codMudanca={$Fetch['codMudanca']}" ?>" title="Visualizar"> 
                                                    <i class="fa fa-search "></i> 
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
