<?php

include 'variaveis.php';
include ("../Classes/Crud.php");

$crud = new Crud();

if($acao=='Cadastrar'){
 $crud->insertDB(
        "situacaoMaquina",
        "?,?", 
        array(
    $codSituacao,
    $situacao,
     )      
); 
 
} else {
  $crud->updateDB(
          "situacaoMaquina",
          "situacao=?",
          "codSituacao=?",
          array(
              $situacao,
              $codSituacao
          )
          );
    
}


echo 
'<script type="text/javascript">location.replace("../situacaoMaquina.php"); 
 
 	     </script>';

