<?php

include 'variaveis.php';
include ("../Classes/Crud.php");

$crud = new Crud();

if($acao=='Cadastrar'){
 $crud->insertDB(
        "garantia",
        "?,?,?,?,?", 
        array(
    $codGarantia,
    $codMaquina,
    $dataInicio,
    $notaFiscal,
    $dataTermino        
     )      
); 
 
} else {
  $crud->updateDB(
          "garantia",
          "codMaquina=?, dataInicio=?, notaFiscal=?, dataTermino=?",
          "codGarantia=?",
          array(
              $codMaquina,
              $dataInicio,
              $notaFiscal,
              $dataTermino,
              $codGarantia
          )
          );
    
}


echo 
'<script type="text/javascript">location.replace("../garantia.php"); 
 
 	     </script>';

