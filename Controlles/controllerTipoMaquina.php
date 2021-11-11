<?php

include 'variaveis.php';
include ("../Classes/Crud.php");

$crud = new Crud();

if($acao=='Cadastrar'){
 $crud->insertDB(
        "tipomaquina",
        "?,?", 
        array(
    $codTipoMaquina,
    $tipo,
     )      
); 
 
} else {
  $crud->updateDB(
          "tipomaquina",
          "tipo=?",
          "codTipoMaquina=?",
          array(
              $tipo,
              $codTipoMaquina
          )
          );
    
}


echo 
'<script type="text/javascript">location.replace("../tipomaquina.php"); 
 
 	     </script>';

