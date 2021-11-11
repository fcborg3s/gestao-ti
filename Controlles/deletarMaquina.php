<?php

include ("../Classes/Crud.php");

$crud=new Crud();


$codMaquina= filter_input(INPUT_GET, 'codMaquina', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB(
         "maquina",
         "codMaquina=?",
         array($codMaquina)
        );

        
echo 
'<script type="text/javascript">location.replace("../maquina.php"); 
 
 	     </script>';
     

		

			
	 
     
