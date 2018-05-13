<?php

class Passenger_model extends CI_Model
{
	public function register()
	{
		$passengerData = array(
			'name' => $_POST['name'],
			'surname' => $_POST['surname'],
			'persCode' => $_POST['persCode']);
		$this->db->insert('passengers', $passengerData);
	}
	public function list()
	{
		$query = $this->db->get('passengers');
		return $query->result();
	}
}