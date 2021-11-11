<?php

include 'variaveis.php';
include ("../Classes/Crud.php");

$crud = new Crud();

if($acao=='Cadastrar'){
 $crud->insertDB(
        "marca",
        "?,?", 
        array(
    $codMarca,
    $nomeMarca,
     )      
); 
 
} else {
  $crud->updateDB(
          "marca",
          "nomeMarca=?",
          "codMarca=?",
          array(
              $nomeMarca,
              $codMarca
          )
          );
    
}


echo 
'<script type="text/javascript">location.replace("../marca.php"); 
 
 	     </script>';

