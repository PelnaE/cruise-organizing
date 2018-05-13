<?php 

class Users_model extends CI_Model {
	public function proceed()
	{
		$userData = array(
			'name' => $_POST['name'],
			'surname' => $_POST['surname'],
			'persCode' => $_POST['persCode'],
			'password' => $_POST['pass']);

		$this->db->insert('users', $userData);
	}
	public function checkLogin($post)
	{
		$this->load->library('password');       
        $this->db->select('*');
        $this->db->where('persCode', $post['persCode']);
        $query = $this->db->get('users');
        $userInfo = $query->row();
        if(!$this->password->validate_password($post['pass'], $userInfo->password)){
            error_log('Unsuccessful login attempt('.$post['persCode'].')');
            return false; 
        }
        
        
        unset($userInfo->password);
        return $userInfo;
    }
}