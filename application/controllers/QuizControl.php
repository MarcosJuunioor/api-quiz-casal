<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuizControl extends CI_Controller {

	/**
	 * @return [type] [description]
	 */

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('QuizModel');
	}

	public function index()
	{
        echo "quiz";
	}


}

