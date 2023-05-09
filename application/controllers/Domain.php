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
		$this->load->view('home/head', $data);
		$this->load->view('domain/domain', $data);
		$this->load->view('home/footer', $data);
	}

	public function tambah()
	{
		$data['domain'] = $this->domain_model->all();
		$this->load->view('home/head', $data);
		$this->load->view('domain/tambah_domain', $data);
		$this->load->view('home/footer', $data);
	}

	public function tambah_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == TRUE){
			$this->tambah();
		} else {
			$data = array(
				'server_id' => $this->input->post('server_id'),
				'domain' => $this->input->post('domain'),
			);
			$this->domain_model->insert_data($data, 'domain');
			$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			Data Berhasil Ditambah!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  	</div>');
			redirect('domain');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('server_id', 'Server ID', 'required', array(
			'required' => 'kolom harus diisi !'
		));
		$this->form_validation->set_rules('domain', 'Domain', 'required', array(
			'required' => 'kolom harus diisi !'
		));
	}
}

