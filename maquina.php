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
                        <li class="breadcrumb-item active">Maquina</li>
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
                                <h3 class="card-title">Maquina</h3>

                                <div class="card-tools">
                                    <a href="editarMaquina.php"><button type="button" class="btn btn-primary">  
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
                                            "m.codEmpresa=e.codEmpresa and m.codDepartamento=d.codDepartamento and m.codEstadoMaquina=1",
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
                                                <a class="btn btn-info" href="<?php echo "editarMaquina.php?codMaquina={$Fetch['codMaquina']}" ?>" title="Editar"> 
                                                    <i class="fa fa-edit "></i> 
                                                </a>  

                                                <a class="btn btn-danger"  href="<?php echo"Controlles/deletarMaquina.php?codMaquina={$Fetch['codMaquina']} "?>" title="Excluir" > 
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
