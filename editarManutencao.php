<?php
require 'head.php';
require 'header.php';
include ("Classes/Crud.php");
?>

<?php
if (isset($_GET['codMaquina'])) {
    $manut = "cadastra";

    $crud = new Crud();
    $BFetch = $crud->selectIdDB("*", "maquina", "codMaquina=?", array($_GET['codMaquina']));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    $manutecao = $Fetch['codMaquina'];
}

//edição de dados
if (isset($_GET['codManutencao'])) {
    $acao = "Editar";

    $crud = new Crud();

    $BFetch = $crud->selectIdDB("*", "manutencao", "codManutencao=?", array($_GET['codManutencao']));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    $codManutencao = $Fetch['codManutencao'];
    $codMaquina = $Fetch['codMaquina'];
    $dataRecebimento = $Fetch['dataRecebimento'];
    $descricaoProblema = $Fetch['descricaoProblema'];
    $dataDevolucao = $Fetch['dataDevolucao'];
    $valor = $Fetch['valor'];
    $descricaoReparo = $Fetch['descricaoReparo'];



//cadastro novo            
} else {

    $acao = "Cadastrar";
    $codManutencao = 0;
    $codMaquina = "";
    $dataRecebimento = "";
    $descricaoProblema = "";
    $dataDevolucao = "";
    $valor = "";
    $descricaoReparo = "";
    $status = 0;
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
                        <li class="breadcrumb-item"><a href="marca.php">Marca</a></li>
                        <li class="breadcrumb-item active"><?php echo $acao; ?> manutenção</li>
                    </ol>
                </div>                   
            </div><!-- /.row -->


            <!-- Horizontal Form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> <?php echo $acao; ?> manutenção</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-manutencao" name="manutencao" id="marca" method="post" action="Controlles/controllerEditarManutencao.php">

                    <input type="hidden" id="acao" name="acao" value="<?php echo $acao ?>">
                    <input type="hidden" id="status" name="status" value="<?php echo $status ?>">
                    <input type="hidden" id="codManutencao" name="codManutencao" value="<?php echo $codManutencao ?>">
                    <input type="hidden" id="codManutencao" name="codMaquina" value="<?php echo $codMaquina ?>">

                    <div class="card-body">                                                            

                        <?php
                        if ($acao == 'Editar') {

                            $BFetch = $crud->selectIdDB(
                                    "mt.codManutencao, m.nomeMaquina, t.tipo, e.nomeEmpresa, d.nomeDepartamento, mt.dataRecebimento, mt.descricaoProblema",
                                    "manutencao mt, maquina m, tipomaquina t, empresa e, departamento d",
                                    "mt.codMaquina=m.codMaquina "
                                    . "and m.codTipoMaquina=t.codTipoMaquina "
                                    . "and m.codEmpresa=e.codEmpresa "
                                    . "and m.codDepartamento=d.codDepartamento "
                                    . "and mt.codManutencao=?",
                                    array($codManutencao)
                            );
                            $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
                            ?>

                            <div class="form-group row">
                                <label for="inputnomeMaquina" class="col-sm-2 col-form-label">Nome maquina :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nomeMaquina" class="form-control" value="<?php echo $Fetch['nomeMaquina'] ?>"  readonly="readonly" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputnomeEmpresa" class="col-sm-2 col-form-label">Empresa :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nomeEmpresa" class="form-control" value="<?php echo $Fetch['nomeEmpresa'] ?>" readonly="readonly" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputnomeDepartamento" class="col-sm-2 col-form-label">Departamento :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nomeDepartamento" class="form-control" value="<?php echo $Fetch['nomeDepartamento'] ?>" readonly="readonly" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputdataRecebimento" class="col-sm-2 col-form-label">Deta Recebimento :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="dataRecebimento" class="form-control" value="<?php echo $Fetch['dataRecebimento'] ?>" readonly="readonly" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputdescricaoProblema" class="col-sm-2 col-form-label">Descrição do Problema :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="descricaoProblema" class="form-control" value="<?php echo $Fetch['descricaoProblema'] ?>" readonly="readonly" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputnome" class="col-sm-2 col-form-label">Data Devolução :</label>
                                <div class="col-sm-10">
                                    <input type="date" name="dataDevolucao" class="form-control" value="<?php echo $dataDevolucao ?>" placeholder="Data devolução" required>
                                </div>
                            </div>                                                                



                            <div class="form-group row">
                                <label for="inputnome" class="col-sm-2 col-form-label">Valor R$ :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="valor" class="form-control" value="<?php echo $valor ?>" placeholder="valor" required>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label for="inputnome" class="col-sm-2 col-form-label">Descricão Reparo :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="descricaoReparo" class="form-control" value="<?php echo $descricaoReparo ?>" placeholder="Descricao Reparo" required>
                                </div>
                            </div> 

                            <input type="hidden" id="status" name="status" value="<?php echo '1' ?>">

                        <?php } else { ?>                                                                           

                            <div class="form-group row">  
                                <label for="inputSelect" class="col-sm-2 col-form-label">Nome Maquina :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="codMaquina"  required>
                                        
                                        <?php if ($manut == 'cadastra') { ?>
                                            <option value="<?php echo $Fetch['codMaquina']; ?>"><?php echo $Fetch['nomeMaquina']; ?></option>
                                            
                                        <?php } else { ?>
                                            
                                            <option value="" selected >Selecione a Maquina</option>                    
                                        <?php } ?>
                                            
                                        <?php
                                        $crud = new Crud();

                                        $BFetch = $crud->selectDB(
                                                "*",
                                                "maquina",
                                                "",
                                                array()
                                        );

                                        while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <option value="<?php echo $Fetch['codMaquina']; ?>"><?php echo $Fetch['nomeMaquina']; ?></option>

                                            <?php
                                        }
                                        ?>

                                    </select>
                                </div>    
                            </div> 


                            <div class="form-group row">
                                <label for="inputnome" class="col-sm-2 col-form-label">Data recbimento :</label>
                                <div class="col-sm-10">
                                    <input type="date" name="dataRecebimento" class="form-control" value="<?php echo $dataRecebimento ?>"  required>
                                </div>
                            </div>                                                                

                            <div class="form-group row">
                                <label for="inputcnpj" class="col-sm-2 col-form-label">Descricão do Problema :</label> 
                                <div class="col-sm-10">
                                    <input type="text" name="descricaoProblema" class="form-control" value="<?php echo $descricaoProblema ?>"  required>
                                </div>
                            </div> 

                            <input type="hidden" id="descricaoReparo" name="descricaoReparo" value="<?php echo '' ?>">

                        <?php } ?>



                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">                      
                        <button type="submit" class="btn btn-info float-left" value="<?php echo $acao ?>"> &nbsp; &nbsp;Salvar &nbsp; &nbsp;</button>                                     
                        <a href="manutencao.php"><button  type="button" class="btn btn-default float-right">Cancelar</button></a>                 
                    </div>



                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
</div>



<?php require 'footer.php'; ?>


