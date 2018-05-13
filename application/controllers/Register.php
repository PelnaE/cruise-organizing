<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('template/header');
		$this->load->view('register_page');
		$this->load->view('template/footer');
	}
	public function proceed()
	{
		$this->load->view('template/header');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Vārds', 'required',
			array(
				'required' => '{field} nav norādīts'));
		$this->form_validation->set_rules('surname', 'Uzvārds', 'required',
			array(
				'required' => '{field} nav norādīts.'));
		$this->form_validation->set_rules('persCode', 'Personas kods', 'required|min_length[12]|max_length[12]|is_unique[users.persCode]',
			array(
				'required' => 'Jābūt norādītam personas kodam',
				'min_length' => 'Personas kodam jāsastāv no vismaz 12 simboliem.',
				'max_length' => '{field} nedrīkst pārsniegt 12 simbolus.',
				'is_unique' => 'Lietotājs ar šādu personas kodu jau ir reģistrēts.'));
		$this->form_validation->set_rules('pass', 'Parole', 'required',
			array('required' => '{field} nav norādīta'));
		$this->form_validation->set_rules('passAgain', 'Parole vēlreiz', 'required|matches[pass]',
			array(
				'required' => '{field} nav norādīta',
				'matches' => 'Paroles nesakrīt'));
		if($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('flash_message', 'Dati ievadīti neprecīzi.');
			$this->load->view('register_page');
		} else {
			$_POST['pass'] = $this->password->create_hash($_POST['pass']);
			$this->load->model('users_model');
			$this->users_model->proceed();
			$this->session->set_flashdata('success_message', 'Reģistrācija ir veiksmīga');
			$this->load->view('register_page');
		}
		$this->load->view('template/footer');		
	}
}