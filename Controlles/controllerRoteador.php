<?php

include 'variaveis.php';
include ("../Classes/Crud.php");

$crud = new Crud();

if($acao=='Cadastrar'){
 $crud->insertDB(
        "roteadores",
        "?,?,?,?,?,?,?", 
        array(
    $codRoteador,
    $marca,
    $usuario,
    $senha,
    $nomeRede,
    $senhaWifi,
    $local,
     )      
); 
 
} else {
  $crud->updateDB(
          "roteadores ",
          "marca=?, usuario=?, senha=?, nomeRede=?, senhaWifi=?, local=? ",
          "codRoteador=?",
          
          array(
              $marca,
              $usuario,
              $senha,
              $nomeRede,
              $senhaWifi,
              $local,
              $codRoteador
          )
          );
    
}


echo 
'<script type="text/javascript">location.replace("../roteadores.php"); 
 
 	     </script>';

