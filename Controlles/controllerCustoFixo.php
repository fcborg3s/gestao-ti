<?php

include 'variaveis.php';
include ("../Classes/Crud.php");

$crud = new Crud();

if($acao=='Cadastrar'){
 $crud->insertDB(
        "custofixo",
        "?,?,?,?,?,?", 
        array(
    $codCustoFixo,
    $nomeServico,
    $codEmpresa,
    $qtLicenca,
    $tipo,        
    $valorMensal        
     )      
); 
 
} else {
  $crud->updateDB(
          "custofixo",
          "nomeServico=?, codEmpresa=?, qtLicenca=?, tipo=?, valorMensal=?",
          "codCustoFixo=?",
          array(
              $nomeServico,
              $codEmpresa,
              $qtLicenca,
              $tipo,
              $valorMensal,
              $codCustoFixo
          )
          );
    
}


echo 
'<script type="text/javascript">location.replace("../custofixo.php"); 
 
 	     </script>';



