<?php

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('BANCO', 'projetoweb');

class Conexao{

    protected $mysqli;
    
    public function __construct(){
        try{
        $this->conexaoMysql();
        }catch(Exception $e){
            echo "Banco não está conectado";
        }
    }

    public function conexaoMysql(){
        $this->mysql = new mysql(SERVIDOR, USUARIO, SENHA, BANCO);

    }

    public function setAgedamentos($nome, $telefone, $origem, $data_contato, $observacao){
        $stmt = $this->mysqli->prepare("INSERT INTO agendamentos('nome','telefone','origem','data_contato','observacao') VALUES(?,?,?,?,?)");
        $stmt->bind_param("sssss",$nome,$telefone,$origem,$data_contato,$observacao);
        if($stmt->execute() == TRUE){
            return true;
        }else{
            return false;
        }
    }
}


?>