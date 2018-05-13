<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('users_model');
		$this->load->model('routes_model');
		$this->load->model('ships_model');
	}
	public function index()
	{
		$this->load->view('template/header');
		
		if(!isset($_SESSION['persCode']))
		{

			$this->load->view('index_page');
		} else {
			$this->load->view('template/sidebar');
			$data['routes'] = $this->routes_model->list();
			$this->load->view('logged_page', $data);
		}
		$this->load->view('template/footer');
	}
	public function login()
	{
		$this->form_validation->set_rules('persCode', 'Personas kods', 'required|min_length[12]|max_length[12]');
		$this->form_validation->set_rules('pass', 'Parole', 'required');
		if($this->form_validation->run() == FALSE) {
			echo 'Hi';
		}
		$post = $this->input->post();  
        $clean = $this->security->xss_clean($post);
        $userInfo = $this->users_model->checkLogin($clean);
        if(!$userInfo){
        	$this->session->set_flashdata('flash_message', 'Ielogošanās neveiksmīga');
        	redirect('/');
        }
        foreach($userInfo as $key=>$val){
        	$this->session->set_userdata($key, $val);
        }
        redirect('/');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}
