<?php

include 'variaveis.php';
include ("../Classes/Crud.php");

$crud = new Crud();

if($acao=='Cadastrar'){
 $crud->insertDB(
        "maquina",
        "?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?", 
        array(
    $codMaquina,
    $nomeMaquina,
    $nomeUsuario,        
    $codTipoMaquina,
    $codEmpresa,
    $codDepartamento,
    $codMarca,
    $modelo,
    $valor,
    $disco,
    $memoria,
    $sistemaOperacional,
    $processador,
    $codSituacao,
    $idAnydesk,
    $senhaAnydesk,
    $ip,
    $codEstadoMaquina        
     )      
); 
 
} else {
  $crud->updateDB(
            "maquina",
            "nomeMaquina=?,"
          . "nomeUsuario=?, "
          . "codTipoMaquina=?,"
          . "codEmpresa=?,"
          . "codDepartamento=?,"
          . "codMarca=?,"
          . "modelo=?,"
          . "valor=?,"
          . "disco=?,"
          . "memoria=?,"
          . "sistemaOperacional=?,"
          . "processador=?,"
          . "codSituacao=?,"
          . "idAnydesk=?,"
          . "senhaAnydesk=?,"
          . "ip=?,"
          . "codEstadoMaquina=?",
          "codMaquina=?",
          array(
              $nomeMaquina,
              $nomeUsuario,
              $codTipoMaquina,
              $codEmpresa,
              $codDepartamento,
              $codMarca,
              $modelo,
              $valor,
              $disco,
              $memoria,
              $sistemaOperacional,
              $processador,
              $codSituacao,
              $idAnydesk,
              $senhaAnydesk,
              $ip,
              $codEstadoMaquina,
              $codMaquina
          )
          );
    
}


echo 
'<script type="text/javascript">location.replace("../maquina.php"); 
 
 	     </script>';

