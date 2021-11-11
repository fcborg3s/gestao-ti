<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
//edição de dados
if (isset($_GET['codRoteador'])) {
    $acao = "Editar";

    $crud = new Crud();

    $BFetch = $crud->selectIdDB("*", "roteadores", "codRoteador=?", array($_GET['codRoteador']));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    $codRoteador = $Fetch['codRoteador'];
    $marca = $Fetch['marca'];
    $usuario = $Fetch['usuario'];
    $senha = $Fetch['senha'];
    $nomeRede = $Fetch['nomeRede'];
    $senhaWifi = $Fetch['senhaWifi'];
    $local = $Fetch['local'];
    

//cadastro novo            
} else {
    $acao = "Cadastrar";
    $codRoteador = 0;
    $marca = "";
    $usuario = "";
    $senha = "";
    $nomeRede = "";
    $senhaWifi = "";
    $local = "";
    
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
                        <li class="breadcrumb-item"><a href="roteadores.php">Roteador</a></li>
                        <li class="breadcrumb-item active"><?php echo $acao; ?> Roteador</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->


            <!-- Horizontal Form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> <?php echo $acao; ?> Roteador</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-marca" name="roteadores" id="servidores" method="post" action="Controlles/controllerRoteador.php">

                    <input type="hidden" id="acao" name="acao" value="<?php echo $acao ?>">
                    <input type="hidden" id="codMarca" name="codRoteador" value="<?php echo $codRoteador ?>">

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">marca :</label>
                            <div class="col-sm-10">
                                <input type="text" name="marca" class="form-control" value="<?php echo $marca ?>" placeholder="Marca" required>
                            </div>
                        </div>                                                                



                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Usuario Roteador :</label>
                            <div class="col-sm-10">
                                <input type="text" name="usuario" class="form-control" value="<?php echo $usuario ?>" placeholder="Usuario" required>
                            </div>
                        </div>                                                                
                                          

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Senha :</label>
                            <div class="col-sm-10">
                                <input type="text" name="senha" class="form-control" value="<?php echo $senha ?>" placeholder="Senha" required>
                            </div>
                        </div>    

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Nome da rede :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeRede" class="form-control" value="<?php echo $nomeRede ?>" placeholder="Nome da rede" required>
                            </div>
                        </div>   
                        
                         <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Senha Wi-fi :</label>
                            <div class="col-sm-10">
                                <input type="text" name="senhaWifi" class="form-control" value="<?php echo $senhaWifi ?>" placeholder="Senha Wi-fi" required>
                            </div>
                        </div>  
                        
                         
                         <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Local :</label>
                            <div class="col-sm-10">
                                <input type="text" name="local" class="form-control" value="<?php echo $local ?>" placeholder="Local" required>
                            </div>
                        </div>  

                    </div>


                    <!-- /.card-body -->

                    <div class="card-footer">                      
                        <button type="submit" class="btn btn-info float-left" value="<?php echo $acao ?>"> &nbsp; &nbsp;Salvar &nbsp; &nbsp;</button>                                     
                        <a href="roteadores.php"><button  type="button" class="btn btn-default float-right">Cancelar</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>
