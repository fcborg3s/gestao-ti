<?php

include ("../Classes/Crud.php");

$crud=new Crud();


$codMarca= filter_input(INPUT_GET, 'codMarca', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB(
        "marca",
         "codMarca=?",
         array($codMarca)
        );

        
echo 
'<script type="text/javascript">location.replace("../marca.php"); 
 
 	     </script>';
     

		

			
	 
     
