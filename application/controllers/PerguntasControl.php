<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerguntasControl extends CI_Controller {

	/**
	 * @return [type] [description]
	 */

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('PerguntasModel');
	}

	public function index()
	{
        echo "perguntas";   
	}


}

