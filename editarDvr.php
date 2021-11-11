<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
//edição de dados
if (isset($_GET['codDvr'])) {
    $acao = "Editar";

    $crud = new Crud();

    $BFetch = $crud->selectIdDB("*", "dvrs", "codDvr=?", array($_GET['codDvr']));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    $codDvr = $Fetch['codDvr'];
    $ipDvr = $Fetch['ipDvr'];
    $codEmpresa = $Fetch['codEmpresa'];
    $loca = $Fetch['local'];
    $nomeDvr = $Fetch['nomeDvr'];
    $senha = $Fetch['senha'];
    $porta = $Fetch['porta']; 

//cadastro novo            
} else {
    $acao = "Cadastrar";
    $codDvr = 0;
    $ipDvr = "";
    $codEmpresa = "";
    $local = "";
    $nomeDvr = "";
    $senha = "";
    $porta = "";
   
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
                        <li class="breadcrumb-item"><a href="dvrs.php">Servidor</a></li>
                        <li class="breadcrumb-item active"><?php echo $acao; ?> Dvr</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->


            <!-- Horizontal Form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> <?php echo $acao; ?> Dvr</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-dvrs" name="dvrs" id="dvrs" method="post" action="Controlles/controllerDvr.php">

                    <input type="hidden" id="acao" name="acao" value="<?php echo $acao ?>">
                    <input type="hidden" id="codDvr" name="codDvr" value="<?php echo $codDvr ?>">

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Ip dvr :</label>
                            <div class="col-sm-10">
                                <input type="text" name="ipDvr" class="form-control" value="<?php echo $ipDvr ?>" placeholder="Ip Dvr" required>
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
                            <label for="inputnome" class="col-sm-2 col-form-label">Local :</label>
                            <div class="col-sm-10">
                                <input type="text" name="local" class="form-control" value="<?php echo $local ?>" placeholder="local" required>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Usuário :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeDvr" class="form-control" value="<?php echo $nomeDvr ?>" placeholder="Usuário " required>
                            </div>
                        </div>   

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Senha :</label>
                            <div class="col-sm-10">
                                <input type="text" name="senha" class="form-control" value="<?php echo $senha ?>" placeholder="Senha" required>
                            </div>
                        </div>    

                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Porta :</label>
                            <div class="col-sm-10">
                                <input type="number" name="porta" class="form-control" value="<?php echo $porta ?>" placeholder="Porta" required>
                            </div>
                        </div>   
                                       

                    </div>


                    <!-- /.card-body -->

                    <div class="card-footer">                      
                        <button type="submit" class="btn btn-info float-left" value="<?php echo $acao ?>"> &nbsp; &nbsp;Salvar &nbsp; &nbsp;</button>                                     
                        <a href="dvrs.php"><button  type="button" class="btn btn-default float-right">Cancelar</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>

