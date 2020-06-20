<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioQuizModel extends CI_Model {

    private $tabela = "usuario_quiz";

	public function criar($dados){
        $this->db->insert($this->tabela, $dados);
        if ($this->db->affected_rows() == '1')
            return $this->db->insert_id();
        return false;
    }

    
	public function listar(){
    }

    
	public function atualizar(){
    }

    
	public function deletar(){
    }


}