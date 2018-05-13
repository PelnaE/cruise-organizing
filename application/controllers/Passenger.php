<?php

class Passenger extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
	}
	public function index()
	{
		$this->load->view('passenger_register');
		$this->load->view('template/footer');
	}
	public function register()
	{
		$this->form_validation->set_rules('name', 'Vārds', 'required');
		$this->form_validation->set_rules('surname', 'Uzvārds', 'required');
		$this->form_validation->set_rules('persCode', 'Personas kods', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('passenger_register');
		}
		else
		{
			$this->load->model('passenger_model');
			$this->passenger_model->register();
			$this->session->set_flashdata('success', 'Pasažieris piereģistrēts veiksmīgi!');
			redirect('passenger');
		}
	}
	public function list()
	{
		$this->load->model('passenger_model');
		$data['passengers'] = $this->passenger_model->list();
		$this->load->view('passengers_list', $data);
	}
}