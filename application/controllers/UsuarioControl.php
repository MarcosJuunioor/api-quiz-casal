<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioControl extends CI_Controller {

	/**
	 * @return [type] [description]
	 */

	public function __construct()
	{
        parent::__construct();		
        $this->load->model('UsuarioModel');
	}

	public function index()
	{
        echo "usuario";   
	}

	public function cadastrar(){
		$dados = array(
			"nome"=>"marcos",
			"email"=>"marcos@gmail.com",
			"senha"=>"123",
			"sexo"=>"M"
		);
		$this->UsuarioModel->criar($dados);
	}

}

