<?php

include ("../Classes/Crud.php");

$crud=new Crud();


$codUsuario= filter_input(INPUT_GET, 'codUsuario', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB(
        "usuario",
         "codUsuario=?",
         array($codUsuario)
        );

        
echo 
'<script type="text/javascript">location.replace("../usuario.php"); 
 
 	     </script>';
     

		

			
	 
     
