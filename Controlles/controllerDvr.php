<?php

include 'variaveis.php';
include ("../Classes/Crud.php");

$crud = new Crud();

if($acao=='Cadastrar'){
 $crud->insertDB(
        "dvrs",
        "?,?,?,?,?,?,?", 
        array(
    $codDvr,
    $ipDvr,
    $codEmpresa,
    $local,
    $nomeDvr,
    $senha,
    $porta         
     )      
); 
 
} else {
  $crud->updateDB(
          "dvrs",
          "ipDvr=?, codEmpresa=?, local=?, nomeDvr=?, senha=?, porta=? ",
          "codDvr=?",
          array(
              $ipDvr,
              $codEmpresa,
              $local,
              $nomeDvr,
              $senha,
              $porta,
              $codDvr
          )
          );
    
}


echo 
'<script type="text/javascript">location.replace("../dvrs.php"); 
 
 	     </script>';

