<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
//edição de dados
if (isset($_GET['codServidor'])) {
    $acao = "Editar";

    $crud = new Crud();

    $BFetch = $crud->selectIdDB("*", "servidores", "codServidor=?", array($_GET['codServidor']));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    $codServidor = $Fetch['codServidor'];
    $ipServidor = $Fetch['ipServidor'];
    $servico = $Fetch['servico'];
    $codEmpresa = $Fetch['codEmpresa'];
    $usuarioServidor = $Fetch['usuarioServidor'];
    $senhaServidor = $Fetch['senhaServidor'];
    $sistemaOperacional = $Fetch['sistemaOperacional'];
    $portaLocal = $Fetch['portaLocal'];
    $portaExterna = $Fetch['portaExterna'];

//cadastro novo            
} else {
    $acao = "Cadastrar";
    $codServidor = 0;
    $ipServidor = "";
    $servico = "";
    $codEmpresa = "";
    $usuarioServidor = "";
    $senhaServidor = "";
    $sistemaOperacional = "";
    $portaLocal = "";
    $portaExterna = "";
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
                        <li class="breadcrumb-item"><a href="servidores.php">Servidor</a></li>
                        <li class="breadcrumb-item active"><?php echo $acao; ?> Servidor</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->


            <!-- Horizontal Form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> <?php echo $acao; ?> Servidor</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-marca" name="servidores" id="servidores" method="post" action="Controlles/controllerServidor.php">

                    <input type="hidden" id="acao" name="acao" value="<?php echo $acao ?>">
                    <input type="hidden" id="codMarca" name="codServidor" value="<?php echo $codServidor ?>">

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Ip servidor :</label>
                            <div class="col-sm-10">
                                <input type="text" name="ipServidor" class="form-control" value="<?php echo $ipServidor ?>" placeholder="Ip servidor" required>
                            </div>
                        </div>                                                                



                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Serviço :</label>
                            <div class="col-sm-10">
                                <input type="text" name="servico" class="form-control" value="<?php echo $servico ?>" placeholder="servico" required>
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
                            <label for="inputnome" class="col-sm-2 col-form-label">Usuário :</label>
                            <div class="col-sm-10">
                                <input type="text" name="usuarioServidor" class="form-control" value="<?php echo $usuarioServidor ?>" placeholder="Usuário Servidor" required>
                            </div>
                        </div>   

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Senha :</label>
                            <div class="col-sm-10">
                                <input type="text" name="senhaServidor" class="form-control" value="<?php echo $senhaServidor ?>" placeholder="Senha Servidor" required>
                            </div>
                        </div>    

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Sistema Operacional :</label>
                            <div class="col-sm-10">
                                <input type="text" name="sistemaOperacional" class="form-control" value="<?php echo $sistemaOperacional ?>" placeholder="Sistema Operacional" required>
                            </div>
                        </div>   
                        
                         <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Porta Local :</label>
                            <div class="col-sm-10">
                                <input type="number" name="portaLocal" class="form-control" value="<?php echo $portaLocal ?>" placeholder="Porta local">
                            </div>
                        </div>  
                        
                         
                         <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Porta Externa :</label>
                            <div class="col-sm-10">
                                <input type="number" name="portaExterna" class="form-control" value="<?php echo $portaExterna ?>" placeholder="Porta Externa">
                            </div>
                        </div>  

                    </div>


                    <!-- /.card-body -->

                    <div class="card-footer">                      
                        <button type="submit" class="btn btn-info float-left" value="<?php echo $acao ?>"> &nbsp; &nbsp;Salvar &nbsp; &nbsp;</button>                                     
                        <a href="servidores.php"><button  type="button" class="btn btn-default float-right">Cancelar</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>
