<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioControl extends CI_Controller {

	/**
	 * @return [type] [description]
	 */

	public function __construct()
	{
        parent::__construct();		
        $this->load->model('ContasAReceber_model');
	}

	public function index()
	{
        echo "usuario";   
	}


}

