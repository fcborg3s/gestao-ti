<?php

include ("../Classes/Crud.php");

$crud=new Crud();


$codSituacao= filter_input(INPUT_GET, 'codSituacao', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB(
        "situacaomaquina",
         "codSituacao=?",
         array($codSituacao)
        );

        
echo 
'<script type="text/javascript">location.replace("../situacaoMaquina.php"); 
 
 	     </script>';
     

		

			
	 
     
