<?php

include 'variaveis.php';
include ("../Classes/Crud.php");

$crud = new Crud();

if($acao=='Cadastrar'){
 $crud->insertDB(
        "licenca",
        "?,?,?,?,?,?,?,?", 
        array(
    $codLicenca,
    $licenca,
    $categoria,
    $quantidade,
    $emUso,
    $sobressalente,
    $numeroSerie,
    $vencimento
     )      
); 
 
} else {
  $crud->updateDB(
          "licenca",
          "licenca=?, categoria=?, quantidade=?, emUso=?, sobressalente=?, numeroSerie=?, vencimento=?",
          "codLicenca=?",
          array(
              $licenca,
              $categoria,
              $quantidade,
              $emUso,
              $sobressalente,
              $numeroSerie,
              $vencimento,
              $codLicenca
          )
          );
    
}


echo 
'<script type="text/javascript">location.replace("../licenca.php"); 
 
 	     </script>';

