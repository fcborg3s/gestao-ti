<?php

include 'variaveis.php';
include ("../Classes/Crud.php");

$crud = new Crud();

if($acao=='Cadastrar'){
 $crud->insertDB(
        "departamento",
        "?,?", 
        array(
    $codDepartamento,
    $nomeDepartamento,
     )      
); 
 
} else {
  $crud->updateDB(
          "departamento",
          "nomeDepartamento=?",
          "codDepartamento=?",
          array(
              $nomeDepartamento,
              $codDepartamento
          )
          );
    
}


echo 
'<script type="text/javascript">location.replace("../departamento.php"); 
 
 	     </script>';

