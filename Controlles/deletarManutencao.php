<?php

include ("../Classes/Crud.php");

$crud=new Crud();


$codManutencao= filter_input(INPUT_GET, 'codManutencao', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB(
        "manutencao",
         "codManutencao=?",
         array($codManutencao)
        );

        
echo 
'<script type="text/javascript">location.replace("../manutencao.php"); 
 
 	     </script>';