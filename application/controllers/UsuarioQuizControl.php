<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioQuizControl extends CI_Controller {

	/**
	 * @return [type] [description]
	 */

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('UsuarioQuizModel');
	}

	public function index()
	{
        echo "usuarioXquiz";
	}


}

