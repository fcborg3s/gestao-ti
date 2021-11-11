<?php


/**
 * Description of Conexao
 *
 * @author Francisco.ti
 */
abstract class Conexao {
    
//    Realiza a conexão com banco de dados
    protected function conectaBD(){
        try {
            $con= new PDO("mysql:host=localhost;dbname=gestaoti","root","");
            return $con;
            
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
        
    }
    
}

