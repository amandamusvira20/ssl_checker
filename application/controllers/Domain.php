<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Domain extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('domain_model');
	}

	public function index()
	{
		$data['domain'] = $this->domain_model->all();
		$this->load->view('home/home', $data);
	}
}
