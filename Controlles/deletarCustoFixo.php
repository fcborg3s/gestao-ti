<?php

include ("../Classes/Crud.php");

$crud=new Crud();


$codCustoFixo= filter_input(INPUT_GET, 'codCustoFixo', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB(
        "custofixo",
         "codCustoFixo=?",
         array($codCustoFixo)
        );

        
echo 
'<script type="text/javascript">location.replace("../custoFixo.php"); 
 
 	     </script>';
     

		

			
	 
     
