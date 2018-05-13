<?php

class Voyage extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
	}
	public function index()
	{
		$this->load->model('routes_model');
		$this->load->model('routes_model');
		$this->load->model('passenger_model');
		$this->load->model('cabins_model');
		$data['routes'] = $this->routes_model->list();
		$data['passengers'] = $this->passenger_model->list();
		$data['cabins'] = $this->cabins_model->list();
		$this->load->view('voyage_register', $data);
	}
	public function register()
	{
		$this->form_validation->set_rules('routeID', 'Maršruts', 'required');
		$this->form_validation->set_rules('passengerID', 'Pasažieris', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->model('routes_model');
			$this->load->model('passenger_model');
			$this->load->model('cabins_model');
			$data['routes'] = $this->routes_model->list();
			$data['passengers'] = $this->passenger_model->list();
			$data['cabins'] = $this->cabins_model->list();
			$this->load->view('voyage_register', $data);
		}
		else
		{
			$this->load->model('voyage_model');
			$this->voyage_model->register();
			$this->session->set_flashdata('success', 'Ceļojums piereģistrēts veiksmīgi');
			redirect('voyage');
		}
	}
	public function list()
	{
		$this->load->model('voyage_model');
		$data['voyage'] = $this->voyage_model->list();
		$this->load->view('voyage_list', $data);
	}
}