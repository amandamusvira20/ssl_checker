<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Domain extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('domain_model');
	}
 
	public function index()
	{
		$data['domain'] = $this->domain_model->all();
		$this->load->view('domain', $data);
	}
}