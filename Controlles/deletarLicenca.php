<?php

include ("../Classes/Crud.php");

$crud=new Crud();


$codLicenca= filter_input(INPUT_GET, 'codLicenca', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB(
         "licenca",
         "codLicenca=?",
         array($codLicenca)
        );

        
echo 
'<script type="text/javascript">location.replace("../licenca.php"); 
 
 	     </script>';
     

		

			
	 
     
