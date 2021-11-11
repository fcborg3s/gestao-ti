<?php

include ("../Classes/Crud.php");

$crud=new Crud();


$codGarantia= filter_input(INPUT_GET, 'codGarantia', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB(
        "garantia",
         "codGarantia=?",
         array($codGarantia)
        );

        
echo 
'<script type="text/javascript">location.replace("../garantia.php"); 
 
 	     </script>';