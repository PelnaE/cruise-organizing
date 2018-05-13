<?php

class Ship extends CI_Controller
{
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('ship_register');
		$this->load->view('template/footer');
	}
	public function register()
	{
		$this->load->view('template/header');
		$this->form_validation->set_rules('shipName', 'Kuģa nosaukums', 'required');
		$this->form_validation->set_rules('shipDescr', 'Kuģa apraksts', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('ship_register');
		}
		else
		{
			$this->load->model('ships_model');
			$this->ships_model->register();
			$this->session->set_flashdata('success', 'Kuģis piereģistrēts veiksmīgi');
			redirect('ship');
		}
	}
}