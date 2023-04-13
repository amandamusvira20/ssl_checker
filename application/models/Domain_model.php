<?php
class Domain_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	public function all()
	{
		$data = $this->db->query("SELECT * from domain");
		return $data->result();
	}
}