<?php

include ("../Classes/Crud.php");

$crud=new Crud();


$codTipoMaquina= filter_input(INPUT_GET, 'codTipoMaquina', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB(
        "tipomaquina",
         "codTipoMaquina=?",
         array($codTipoMaquina)
        );

        
echo 
'<script type="text/javascript">location.replace("../tipomaquina.php"); 
 
 	     </script>';
     

		

			
	 
     


