<?php

class Port extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
	}
	public function index()
	{
		$this->load->view('port_register');
	}
	public function register()
	{
		$this->form_validation->set_rules('portName', 'Ostas nosaukums', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('port_register');
		}
		else
		{
			$this->load->model('ports_model');
			$this->ports_model->register();
			$this->session->set_flashdata('success', 'Osta piereģistrēta veiksmīgi');
			redirect('port');
		}
	}
}