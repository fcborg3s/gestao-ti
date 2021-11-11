<?php

include ("../Classes/Crud.php");

$crud=new Crud();


$codServidor= filter_input(INPUT_GET, 'codServidor', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB(
        "servidores",
         "codServidor=?",
         array($codServidor)
        );

        
echo 
'<script type="text/javascript">location.replace("../servidores.php"); 
 
 	     </script>';
     

		

			
	 
     


