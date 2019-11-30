<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	private $_admin	= "admin";
	private $_user	= "user";

	public function __construct() 
	{ 
		construct::__parent(); 
	}

    public function index()// default login ke user
    {
        $this->load->view('welcome_message');
	}
	
	public function admin()
	{
		i$this->form_validation->set_rules('username', 'Username Admin', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->admin();
		} else {
			$username	=	$this->input->post('username');
			$password	=	$this->input->post('password');
			$where 		=	"username";
			$cek		= 	$this->login_model->cek_login($this->_admin, $where, $username, $password);

			if ($cek) { // jika username ada
				foreach ($cek as $row) {
					$this->session->set_userdata('username', $row->username);
					redirect(base_url("admin"));
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">
				username Password salah</div>');
				$this->admin();
			}
		}
	}
}
