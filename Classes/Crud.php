<?php

include ("Conexao.php");


/**
 * Description of Crud
 *
 * @author Francisco.ti
 */
class Crud extends Conexao {

    //Atributos
    private $crud;
    private $contador;

    //Preparação das declarativas
    private function preparedStatements($query, $parametros) {
        $this->coutParametros($parametros);
        $this->crud = $this->conectaBD()->prepare($query);

        if ($this->contador > 0) {
            for ($i = 1; $i <= $this->contador; $i++) {
                $this->crud->bindValue($i, $parametros[$i - 1]);
            }
        }
        $this->crud->execute();
    }

    //Contador de parâmetros
    private function coutParametros($parametros) {
        $this->contador = count($parametros);
    }

    
    //Inserção no Banco de dados
    public function insertDB($tabela, $codicao, $parametros) {
        $this->preparedStatements("INSERT INTO {$tabela} VALUES({$codicao})", $parametros);
        return $this->crud;
    }

    //Seleção no Banco de dados
    public function selectDB($campos, $tabela, $codicao, $parametros) {
        $this->preparedStatements("SELECT {$campos} FROM {$tabela}{$codicao}", $parametros);
        return $this->crud;
    }
    
    
    //Selecinar um id
     public function selectIdDB($campos, $tabela, $codicao, $parametros) {
        $this->preparedStatements("SELECT {$campos} FROM {$tabela} WHERE {$codicao}", $parametros);
        return $this->crud;
    }
    
    //Deletar dados no DB
    public function deleteDB($tabela, $codicao, $parametros){
        $this->preparedStatements("DELETE FROM {$tabela} WHERE {$codicao}", $parametros);
        return $this->crud;
    }
    
    //Atualização no banco de dados
    public function updateDB($tabela, $set, $codicao,$parametros){
        $this->preparedStatements("UPDATE {$tabela} SET {$set} WHERE {$codicao}", $parametros);
        return $this->crud;
    }
     

}
