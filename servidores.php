

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
                        <li class="breadcrumb-item active">Servidores</li>
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
                                <h3 class="card-title">Servidores</h3>

                                <div class="card-tools">
                                    <a href="editarServidores.php"><button type="button" class="btn btn-primary">  
                                            <i class="fas fa-plus"></i>              
                                        </button></a> 
                                </div>
                            </div> 
                        </div>


                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">

                                <thead>
                                    <tr>
                                        <th>Ip</th>
                                        <th>Serviço</th>                   
                                        <th>Usuário</th>
                                        <th>Senha</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <!--Estrutura de loop-->
                                    <?php
                                    $crud = new Crud();
                                    $BFetch = $crud->selectDB(
                                            "*",
                                            "servidores",
                                            "",
                                            array()
                                    );

                                    while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
                                        ?> 


                                        <tr>
                                            <td><?php echo $Fetch['ipServidor']; ?></td>
                                            <td><?php echo $Fetch['servico']; ?></td> 
                                            <td><?php echo $Fetch['usuarioServidor']; ?></td> 
                                            <td><?php echo $Fetch['senhaServidor']; ?></td> 

                                            <td>   
                                                <a class="btn btn-success" href="<?php echo "visualizarServidor.php?codServidor={$Fetch['codServidor']}" ?>" title="Visualizar"> 
                                                    <i class="fa fa-search "></i> 
                                                </a> 
                                                <a class="btn btn-info" href="<?php echo "editarServidores.php?codServidor={$Fetch['codServidor']}" ?>" title="Editar"> 
                                                    <i class="fa fa-edit "></i> 
                                                </a>  

                                                <a class="btn btn-danger"  href="<?php echo"Controlles/deletarServidor.php?codServidor={$Fetch['codServidor']} "?>" title="Excluir" > 
                                                    <i class="fa fa-trash "></i> 
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