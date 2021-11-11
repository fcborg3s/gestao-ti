<?php

include 'variaveis.php';
include ("../Classes/Crud.php");

$crud = new Crud();

if($acao=='Cadastrar'){
 $crud->insertDB(
        "empresa",
        "?,?,?,?", 
        array(
    $codEmpresa,
    $nomeEmpresa,
    $cnpj,
    $cidade
     )      
); 
 
} else {
  $crud->updateDB(
          "empresa",
          "nomeEmpresa=?, cnpj=?, cidade=?",
          "codEmpresa=?",
          array(
              $nomeEmpresa,
              $cnpj,
              $cidade,
              $codEmpresa
          )
          );
    
}


echo 
'<script type="text/javascript">location.replace("../empresa.php"); 
 
 	     </script>';

