<?php

include ("../Classes/Crud.php");

$crud=new Crud();


$codEmpresa= filter_input(INPUT_GET, 'codEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB(
        "empresa",
         "codEmpresa=?",
         array($codEmpresa)
        );

        
echo 
'<script type="text/javascript">location.replace("../empresa.php"); 
 
 	     </script>';
     

		

			
	 
     
