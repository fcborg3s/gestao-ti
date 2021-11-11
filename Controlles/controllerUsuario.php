<?php

include 'variaveis.php';
include ("../Classes/Crud.php");

$crud = new Crud();

if($acao=='Cadastrar'){
 $crud->insertDB(
        "usuario",
        "?,?,?,?", 
        array(
    $codUsuario,
    $nomeUsuario,
    $login,
    $senha
     )      
); 
 
} else {
  $crud->updateDB(
          "usuario",
          "nomeUsuario=?, login=?, senha=?",
          "codUsuario=?",
          array(
              $nomeUsuario,
              $login,
              $senha,
              $codUsuario
          )
          );
    
}


echo 
'<script type="text/javascript">location.replace("../usuario.php"); 
 
 	     </script>';

