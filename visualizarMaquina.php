<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
$crud = new Crud();

$codMaquina = filter_input(INPUT_GET, 'codMaquina', FILTER_SANITIZE_SPECIAL_CHARS);

$BFetch = $crud->selectIdDB(
        "m.nomeMaquina, m.nomeUsuario, t.tipo, e.nomeEmpresa, d.nomeDepartamento, mc.nomeMarca, m.modelo, m.valor, m.disco"
        . ", m.memoria, m.sistemaOperacional, m.processador, s.situacao, m.idAnydesk, m.senhaAnydesk, m.ip, em.estadoMaquina ",
        "maquina m, tipomaquina t, empresa e, departamento d, marca mc, situacaomaquina s, estadomaquina em",
        "m.codTipoMaquina=t.codTipoMaquina "
        . "and m.codEmpresa=e.codEmpresa "
        . "and m.codDepartamento=d.codDepartamento "
        . "and m.codMarca=mc.codMarca "
        . "and m.codSituacao=s.codSituacao "
        . "and m.codEstadoMaquina=em.codEstadoMaquina "
        . "and m.codMaquina=? ",
        array($codMaquina)
);
$Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
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
                        <li class="breadcrumb-item"><a href="maquina.php">Empresa</a></li>
                        <li class="breadcrumb-item active">Visualizar Maquina</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->


            <!-- Horizontal Form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados da Maquina</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-empresa" name="maquina" id="empresa" method="post" action="Controlles/controllerManutencao.php">

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputmaquina" class="col-sm-2 col-form-label">Nome maquina :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeMaquina" class="form-control" value="<?php echo $Fetch['nomeMaquina'] ?>" readonly="readonly">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="inputmaquina" class="col-sm-2 col-form-label">Nome usuário :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeUsuario" class="form-control" value="<?php echo $Fetch['nomeUsuario'] ?>" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputtipo" class="col-sm-2 col-form-label">Tipo maquina :</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipo" class="form-control" value="<?php echo $Fetch['tipo'] ?>" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputnomeEmpresa" class="col-sm-2 col-form-label">Empresa :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeEpresa" class="form-control" value="<?php echo $Fetch['nomeEmpresa'] ?>" readonly="readonly">
                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="inputnomeDepartamento" class="col-sm-2 col-form-label">Departamento :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeDepartamento" class="form-control" value="<?php echo $Fetch['nomeDepartamento'] ?>" readonly="readonly">
                            </div>
                        </div>  


                        <div class="form-group row">
                            <label for="inputMarca" class="col-sm-2 col-form-label">Marca :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomeMarca" class="form-control" value="<?php echo $Fetch['nomeMarca'] ?>" readonly="readonly">
                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="inputModelo" class="col-sm-2 col-form-label">Modelo :</label>
                            <div class="col-sm-10">
                                <input type="text" name="modelo" class="form-control" value="<?php echo $Fetch['modelo'] ?>" readonly="readonly">
                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="inputvalor" class="col-sm-2 col-form-label">Valor :</label>
                            <div class="col-sm-10">
                                <input type="text" name="valor" class="form-control" value="<?php echo $Fetch['valor'] ?>" readonly="readonly">
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="inputdisco" class="col-sm-2 col-form-label">Disco :</label>
                            <div class="col-sm-10">
                                <input type="text" name="disco" class="form-control" value="<?php echo $Fetch['disco'] ?>" readonly="readonly">
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="inputmemoria" class="col-sm-2 col-form-label">Memória :</label>
                            <div class="col-sm-10">
                                <input type="text" name="memoria" class="form-control" value="<?php echo $Fetch['memoria'] ?>" readonly="readonly">
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="inputsistemaOperacional" class="col-sm-2 col-form-label">Sistema operacional :</label>
                            <div class="col-sm-10">
                                <input type="text" name="sistemaOperacional" class="form-control" value="<?php echo $Fetch['sistemaOperacional'] ?>" readonly="readonly">
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="inputprocessador" class="col-sm-2 col-form-label">Processador :</label>
                            <div class="col-sm-10">
                                <input type="text" name="processador" class="form-control" value="<?php echo $Fetch['processador'] ?>" readonly="readonly">
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="inputsituacao" class="col-sm-2 col-form-label">Situação Maquina :</label>
                            <div class="col-sm-10">
                                <input type="text" name="situacao" class="form-control" value="<?php echo $Fetch['situacao'] ?>" readonly="readonly">
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="inputidAnydesk" class="col-sm-2 col-form-label">Id anydesk :</label>
                            <div class="col-sm-10">
                                <input type="text" name="idAnydesk" class="form-control" value="<?php echo $Fetch['idAnydesk'] ?>" readonly="readonly">
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="inputsenhaAnydesk" class="col-sm-2 col-form-label">Senha anydesk :</label>
                            <div class="col-sm-10">
                                <input type="text" name="senhaAnydesk" class="form-control" value="<?php echo $Fetch['senhaAnydesk'] ?>" readonly="readonly">
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="inputip" class="col-sm-2 col-form-label">IP :</label>
                            <div class="col-sm-10">
                                <input type="text" name="ip" class="form-control" value="<?php echo $Fetch['ip'] ?>" readonly="readonly">
                            </div>
                        </div> 
                        
                         <div class="form-group row">
                            <label for="inputestadoMaquina" class="col-sm-2 col-form-label">Estado Maquina :</label>
                            <div class="col-sm-10">
                                <input type="text" name="estadoMaquina" class="form-control" value="<?php echo $Fetch['estadoMaquina'] ?>" readonly="readonly">
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">                                                          
                        <a href="maquina.php"><button  type="button" class="btn btn-default float-right">&nbsp;&nbsp;&nbsp;&nbsp;Sair&nbsp;&nbsp;&nbsp;&nbsp;</button></a>                 
                    </div>

                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>
