<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Resource');
	}


	public function index()
	{
	$this->load->view('backend/modules/login/index');
	}


}
