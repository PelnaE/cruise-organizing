<?php

class Routes_model extends CI_Model
{
	public function register()
	{
		$startTime = human_to_unix($_POST['startYear'].'-'.$_POST['startMonth'].'-'.$_POST['startDay'].' '.$_POST['startTime']);
		$endTime = human_to_unix($_POST['endYear'].'-'.$_POST['endMonth'].'-'.$_POST['endDay'].' '.$_POST['endTime']);
		$routeData = array(
			'routeStart' => $_POST['routeStart'],
			'routeEnd' => $_POST['routeEnd'],
			'startTime' => $startTime,
			'endTime' => $endTime,
			'shipID' => $_POST['shipID']);
		$this->db->insert('routes', $routeData);
	}
	public function list()
	{
		$routes = array();
		$this->db->select('*');
		$this->db->from('routes r1');
		$this->db->join('ships s1', 'r1.shipID = s1.shipID', 'LEFT outer');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$routes = $query->result();
			return $routes;
		}
		return $routes;
	}
}