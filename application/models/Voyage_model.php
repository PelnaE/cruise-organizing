<?php

class Voyage_model extends CI_Model
{
	function register()
	{
		$voyageData = array(
			'cabinID' => $_POST['cabinID'],
			'routeID' => $_POST['routeID'],
			'passengerID' => $_POST['passengerID']);
		$this->db->insert('voyage', $voyageData);
	}
	function list()
	{
		$voyage = array();
		$this->db->select('*');
		$this->db->from('voyage');
		$this->db->join('cabins', 'cabins.ID = voyage.cabinID', 'LEFT');
		$this->db->join('ships', 'ships.shipID = cabins.shipID', 'LEFT');
		$this->db->join('routes', 'routes.routeID = voyage.routeID', 'LEFT');
		$this->db->join('passengers', 'passengers.passengerID = voyage.passengerID', 'LEFT');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$voyage = $query->result();
			return $voyage;
		}
		return $voyage;
	}
}