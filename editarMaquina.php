<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
//edição de dados

if (isset($_GET['codMaquina'])) {
    $acao = "Editar";

    $crud = new Crud();

    $BFetch = $crud->selectIdDB("*", "maquina", "codMaquina=?", array($_GET['codMaquina']));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    $codMaquina = $Fetch['codMaquina'];
    $nomeMaquina = $Fetch['nomeMaquina'];
    $nomeUsuario = $Fetch['nomeUsuario'];
    $codTipoMaquina = $Fetch['codTipoMaquina'];
    $codEmpresa = $Fetch['codEmpresa'];
    $codDepartamento = $Fetch['codDepartamento'];
    $codMarca = $Fetch['codMarca'];
    $modelo = $Fetch['modelo'];
    $valor = $Fetch['valor'];
    $disco = $Fetch['disco'];
    $memoria = $Fetch['memoria'];
    $sistemaOperacional = $Fetch['sistemaOperacional'];
    $processador = $Fetch['processador'];
    $codSituacao = $Fetch['codSituacao'];
    $idAnydesk = $Fetch['idAnydesk'];
    $senhaAnydesk = $Fetch['senhaAnydesk'];
    $ip = $Fetch['ip'];
    $codEstadoMaquina = $Fetch['codEstadoMaquina'];


//cadastro novo            
} else {
    $acao = "Cadastrar";
    $codMaquina = 0;
    $nomeMaquina = "";
    $nomeUsuario = "";
    $codTipoMaquina = "";
    $codEmpresa = "";
    $codDepartamento = "";
    $codMarca = "";
    $modelo = "";
    $valor = "";
    $disco = "";
    $memoria = "";
    $sistemaOperacional = "";
    $processador = "";
    $codSituacao = "";
    $idAnydesk = "";
    $senhaAnydesk = "";
    $ip = "";
    $codEstadoMaquina = "";
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
                        <li class="breadcrumb-item"><a href="maquina.php">Maquina</a></li>
                        <li class="breadcrumb-item active"><?php echo $acao; ?> Maquina</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->


            <!-- Horizontal Form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> <?php echo $acao; ?> Maquina</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-maquina" name="maquina" id="maquina" method="post" action="Controlles/controllerMaquina.php">

                    <input type="hidden" id="acao" name="acao" value="<?php echo $acao ?>">
                    <input type="hidden" id="codMaquina" name="codMaquina" value="<?php echo $codMaquina ?>">

                    <div class="card-body">                                                                                                                                   

                            <div class="form-group row">
                                <label for="inputnome" class="col-sm-2 col-form-label">Nome maquina :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nomeMaquina" class="form-control" value="<?php echo $nomeMaquina ?>" placeholder="Nome Maquina" required>
                                </div>
                            </div>
                        
                            <div class="form-group row">
                                <label for="inputnome" class="col-sm-2 col-form-label">Nome usuário :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nomeUsuario" class="form-control" value="<?php echo $nomeUsuario ?>" placeholder="Nome usuário" required>
                                </div>
                            </div>
                            

                            <div class="form-group row">  
                                <label for="inputSelect" class="col-sm-2 col-form-label">Tipo maquina :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="codTipoMaquina"  required>
                                        <option value="" selected >Selecione tipo Maquina</option>                    

                                        <?php
                                        $crud = new Crud();

                                        $BFetch = $crud->selectDB(
                                                "*",
                                                "tipoMaquina",
                                                "",
                                                array()
                                        );

                                        while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <option value="<?php echo $Fetch['codTipoMaquina']; ?>"><?php echo $Fetch['tipo']; ?></option>

                                            <?php
                                        }
                                        ?>

                                    </select>
                                </div>    
                            </div>


                            <div class="form-group row">  
                                <label for="inputSelect" class="col-sm-2 col-form-label">Empresa :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="codEmpresa" required>
                                        <option value="1" selected >Selecione a empresa</option>                    

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
                                            <option value="<?php echo $Fetch ['codEmpresa']; ?>"><?php echo $Fetch['nomeEmpresa']; ?></option>

                                            <?php
                                        }
                                        ?>

                                    </select>
                                </div>    
                            </div>


                            <div class="form-group row">  
                                <label for="inputSelect" class="col-sm-2 col-form-label">Departamento :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="codDepartamento" required>
                                        <option value="" selected >Selecione o departamento</option>                    

                                        <?php
                                        $crud = new Crud();

                                        $BFetch = $crud->selectDB(
                                                "*",
                                                "departamento",
                                                "",
                                                array()
                                        );

                                        while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <option value="<?php echo $Fetch['codDepartamento']; ?>"><?php echo $Fetch['nomeDepartamento']; ?></option>

                                            <?php
                                        }

                                        print_r($codDepartamento)
                                        ?>

                                    </select>
                                </div>    
                            </div>



                            <div class="form-group row">  
                                <label for="inputSelect" class="col-sm-2 col-form-label">Marca :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="codMarca" required>
                                        <option value=""  >Selecione a Marca</option>                    

                                        <?php
                                        $crud = new Crud();

                                        $BFetch = $crud->selectDB(
                                                "*",
                                                "marca",
                                                "",
                                                array()
                                        );

                                        while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <option value="<?php echo $Fetch['codMarca']; ?>"> <?php echo $Fetch['nomeMarca']; ?> </option>

                                            <?php
                                        }
                                        ?>

                                    </select>
                                </div>    
                            </div>


                            <div class="form-group row">
                                <label for="inputcnpj" class="col-sm-2 col-form-label">Modelo :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="modelo" class="form-control" value="<?php echo $modelo ?>" placeholder="Modelo" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputcnpj" class="col-sm-2 col-form-label">Valor R$:</label>
                                <div class="col-sm-10">
                                    <input type="number" name="valor" class="form-control" value="<?php echo $valor ?>"  placeholder="Valor" required>
                                </div>
                            </div>  

                            <div class="form-group row">
                                <label for="inputcnpj" class="col-sm-2 col-form-label">Disco :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="disco" class="form-control" value="<?php echo $disco ?>"  placeholder="Disco" required>
                                </div>
                            </div>  

                            <div class="form-group row">
                                <label for="inputcnpj" class="col-sm-2 col-form-label">Memória :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="memoria" class="form-control" value="<?php echo $memoria ?>"  placeholder="Memória" required>
                                </div>
                            </div> 


                            <div class="form-group row">
                                <label for="inputcnpj" class="col-sm-2 col-form-label">Sistema Operacional :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="sistemaOperacional" class="form-control" value="<?php echo $sistemaOperacional ?>"  placeholder="Sistema Operacional" required>
                                </div>
                            </div> 


                            <div class="form-group row">
                                <label for="inputcnpj" class="col-sm-2 col-form-label">Processador :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="processador" class="form-control" value="<?php echo $processador ?>"  placeholder="processador" required>
                                </div>
                            </div> 


                            <div class="form-group row">  
                                <label for="inputSelect" class="col-sm-2 col-form-label">Situação :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="codSituacao" required>
                                        <option value="" selected >Selecione a situação</option>                    

                                        <?php
                                        $crud = new Crud();

                                        $BFetch = $crud->selectDB(
                                                "*",
                                                "situacaomaquina",
                                                "",
                                                array()
                                        );

                                        while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <option value="<?php echo $Fetch['codSituacao']; ?>"><?php echo $Fetch['situacao']; ?></option>

                                            <?php
                                        }
                                        ?>

                                    </select>
                                </div>    
                            </div>



                            <div class="form-group row">
                                <label for="inputcnpj" class="col-sm-2 col-form-label">Id anydesk :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="idAnydesk" class="form-control" value="<?php echo $idAnydesk ?>"  placeholder="Id anydesk" >
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label for="inputcnpj" class="col-sm-2 col-form-label">Senha anydesk :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="senhaAnydesk" class="form-control" value="<?php echo $senhaAnydesk ?>"  placeholder="Senha anydesk">
                                </div>
                            </div> 


                            <div class="form-group row">
                                <label for="inputcnpj" class="col-sm-2 col-form-label">Ip :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="ip" class="form-control" value="<?php echo $ip ?>"  placeholder="ip" required>
                                </div>
                            </div> 

                            <div class="form-group row">  
                                <label for="inputSelect" class="col-sm-2 col-form-label">Estado maquina :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="codEstadoMaquina" required>
                                        <option value="" selected >Selecione o estado</option>                    

                                        <?php
                                        $crud = new Crud();

                                        $BFetch = $crud->selectDB(
                                                "*",
                                                "estadomaquina",
                                                "",
                                                array()
                                        );

                                        while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <option value="<?php echo $Fetch['codEstadoMaquina']; ?>"><?php echo $Fetch['estadoMaquina']; ?></option>

                                            <?php
                                        }
                                        ?>

                                    </select>
                                </div>    
                            </div>
                     

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">                      
                        <button type="submit" class="btn btn-info float-left" value="<?php echo $acao ?>"> &nbsp; &nbsp;Salvar &nbsp; &nbsp;</button>                                     
                        <a href="maquina.php"><button  type="button" class="btn btn-default float-right">Cancelar</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>
