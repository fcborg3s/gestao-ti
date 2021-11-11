<?php

include ("../Classes/Crud.php");

$crud=new Crud();


$codDepartamento= filter_input(INPUT_GET, 'codDepartamento', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB(
        "departamento",
         "codDepartamento=?",
         array($codDepartamento)
        );

        
echo 
'<script type="text/javascript">location.replace("../departamento.php"); 
 
 	     </script>';
     

		

			
	 
     
