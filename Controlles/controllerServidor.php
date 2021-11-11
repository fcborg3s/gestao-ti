<?php

include 'variaveis.php';
include ("../Classes/Crud.php");

$crud = new Crud();

if($acao=='Cadastrar'){
 $crud->insertDB(
        "servidores",
        "?,?,?,?,?,?,?,?,?", 
        array(
    $codServidor,
    $ipServidor,
    $servico,
    $codEmpresa,
    $usuarioServidor,
    $senhaServidor,
    $sistemaOperacional,
    $portaLocal,
    $portaExterna        
     )      
); 
 
} else {
  $crud->updateDB(
          "servidores",
          "ipServidor=?, servico=?, codEmpresa=?, usuarioServidor=?, senhaServidor=?, "
          . "sistemaOperacional=?, portaLocal=?, portaExterna=?",
          "codServidor=?",
          array(
              $ipServidor,
              $servico,
              $codEmpresa,
              $usuarioServidor,
              $senhaServidor,
              $sistemaOperacional,
              $portaLocal,
              $portaExterna,
              $codServidor
          )
          );
    
}


echo 
'<script type="text/javascript">location.replace("../servidores.php"); 
 
 	     </script>';

