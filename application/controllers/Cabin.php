<?php

class Cabin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
	}
	public function index()
	{
		$this->load->model('ships_model');
		$data['ships'] = $this->ships_model->list();
		$this->load->view('cabin_register', $data);
		$this->load->view('template/footer');
	}
	public function register()
	{
		$this->form_validation->set_rules('class', 'Kajītes klase', 'required');
		$this->form_validation->set_rules('descr', 'Kajītes apraksts', 'required');
		$this->form_validation->set_rules('shipID', 'Kuģis', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->model('ships_model');
			$data['ships'] = $this->ships_model->list();
			$this->load->view('cabin_register');
		}
		else
		{
			$this->load->model('cabins_model');
			$this->cabins_model->register();
			$this->session->set_flashdata('success', 'Kajīte piereģistrēta veiksmīgi!');
			redirect('cabin');
		}
	}
}