<?php

class Route extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->model('ships_model');
		$this->load->model('routes_model');

	}
	public function index()
	{
		
		$this->load->model('ships_model');
		$data['ships'] = $this->ships_model->list();
		$this->load->model('ports_model');
		$data['ports'] = $this->ports_model->list();
		$this->load->view('route', $data);
		$this->load->view('template/footer');
	}
	public function register()
	{
		$this->form_validation->set_rules('routeStart', 'Atiešanas osta', 'required');
		$this->form_validation->set_rules('routeEnd', 'Pienākšanas osta', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$data['ships'] = $this->ships_model->list();
			$this->load->view('route', $data);
		}
		else
		{
			$this->routes_model->register();
			$this->session->set_flashdata('success', 'Maršruts piereģistrēts veiksmīgi!');
			redirect('route');
		}
	}
}