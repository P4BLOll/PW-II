<?php

class ControllerAgendamentos{
    private $cadastro;

    public function __construct(){
        $this->cadastro = new ControllerAgendamentos();
        $this->incluir();
    }

    private function incluir(){
        $this->agendamentos->setNome($_POST['txtNome']);
        $this->agendamentos->setTelefone($_POST['txtTelefone']);
        $this->agendamentos->setOrigem($_POST['cboOrigem']);
        $this->agendamentos->setData_Contato($_POST['txtData']);
        $this->agendamentos->setObservacao($_POST['txtObservacao']);
        
    }
    
    
    

}

?>