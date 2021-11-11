<?php

include ("../Classes/Crud.php");

$crud=new Crud();


$codRoteador= filter_input(INPUT_GET, 'codRoteador', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB(
        "roteadores",
         "codRoteador=?",
         array($codRoteador)
        );

        
echo 
'<script type="text/javascript">location.replace("../roteadores.php"); 
 
 	     </script>';
     

		

			
	 
     



