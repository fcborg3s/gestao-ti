<?php

include ("../Classes/Crud.php");

$crud=new Crud();


$codDvr= filter_input(INPUT_GET, 'codDvr', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB(
        "dvrs",
         "codDvr=?",
         array($codDvr)
        );

        
echo 
'<script type="text/javascript">location.replace("../dvrs.php"); 
 
 	     </script>';
     

		

			
	 
     
