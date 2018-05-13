<?php

class Ships_model extends CI_Model
{
	public function register()
	{
		$shipData = array(
			'shipName' => $_POST['shipName'],
			'shipDescr' => $_POST['shipDescr']);

		$this->db->insert('ships', $shipData);
	}
	public function list()
	{
		$query = $this->db->get('ships');
		return $query->result();
	}
}