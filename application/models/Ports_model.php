<?php

class Ports_model extends CI_Model
{
	public function register()
	{
		$portData = array(
			'portName' => $_POST['portName']);
		$this->db->insert('ports', $portData);
	}
	public function list()
	{
		$query = $this->db->get('ports');
		return $query->result();
	}
}