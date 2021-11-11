<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
//edição de dados
if (isset($_GET['codUsuario'])) {
    $acao = "Editar";

    $crud = new Crud();

    $BFetch = $crud->selectIdDB("*", "usuario", "codUsuario=?", array($_GET['codUsuario']));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    $codUsuario = $Fetch['codUsuario'];
    $nomeUsuario = $Fetch['nomeUsuario'];
    $login = $Fetch['login'];
    $senha = $Fetch['senha'];


//cadastro novo            
} else {
    $acao = "Cadastrar";
    $codUsuario = 0;
    $nomeUsuario = "";
    $login = "";
    $senha = "";
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
                        <li class="breadcrumb-item"><a href="usuario.php.php">Usuário</a></li>
                        <li class="breadcrumb-item active"><?php echo $acao; ?> usuário</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->


            <!-- Horizontal Form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> <?php echo $acao; ?> usuário</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-usuario" name="usuario" id="usuario" method="post" action="Controlles/controllerUsuario.php">

                    <input type="hidden" id="acao" name="acao" value="<?php echo $acao ?>">
                    <input type="hidden" id="codUsuario" name="codUsuario" value="<?php echo $codUsuario ?>">

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputnome" class="col-sm-2 col-form-label">Nome usuário :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeUsuario" class="form-control" value="<?php echo $nomeUsuario ?>" placeholder="Nome Usuário" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputcnpj" class="col-sm-2 col-form-label">Login :</label>
                            <div class="col-sm-10">
                                <input type="login" name="login" class="form-control" value="<?php echo $login ?>" placeholder="Login" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputcnpj" class="col-sm-2 col-form-label">Senha :</label>
                            <div class="col-sm-10">
                                <input type="senha" name="senha" class="form-control" value="<?php echo $senha ?>" placeholder="Senha" required>
                            </div>
                        </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">                      
                        <button type="submit" class="btn btn-info float-left" value="<?php echo $acao ?>"> &nbsp; &nbsp;Salvar &nbsp; &nbsp;</button>                                     
                        <a href="usuario.php"><button  type="button" class="btn btn-default float-right">Cancelar</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>