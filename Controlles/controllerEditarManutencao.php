<?php

include 'variaveis.php';
include ("../Classes/Crud.php");

$crud = new Crud();

if ($acao == 'Cadastrar') {
    $crud->insertDB(
            "manutencao",
            "?,?,?,?,?,?,?,?",
            array(
                $codManutencao,
                $codMaquina,
                $dataRecebimento,
                $descricaoProblema,
                $dataDevolucao,
                $valor,
                $descricaoReparo,
                $status
            )
    );
} else {
    $crud->updateDB(
            "manutencao",
            "dataDevolucao=?, valor=?, descricaoReparo=?, status=?",
            "codManutencao=?",
            array(
                $dataDevolucao,
                $valor,
                $descricaoReparo,
                $status,
                $codManutencao
            )
    );
}


echo
'<script type="text/javascript">location.replace("../manutencao.php"); 
 
 	     </script>';

