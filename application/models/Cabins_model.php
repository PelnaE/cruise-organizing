<?php

class Cabins_model extends CI_Model
{
	public function register()
	{
		$cabinData = array(
			'class' => $_POST['class'],
			'descr' => $_POST['descr'],
			'shipID' => $_POST['shipID']);
		$this->db->insert('cabins', $cabinData);
	}
	public function list()
	{
		$cabins = array();
		$this->db->select('*');
		$this->db->from('cabins');
		$this->db->join('ships', 'ships.shipID = cabins.shipID', 'LEFT');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$cabins = $query->result();
			return $cabins;
		}
		return $cabins;
	}
}