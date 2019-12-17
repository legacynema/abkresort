<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	private $_admin	= "admin";
	private $_user	= "user";

	public function __construct() 
	{ 
		parent::__construct();
		$this->load->library("form_validation");
		$this->load->model("Model_login");
		if ($this->session->userdata('email_admin')) {
			echo "ada sesi";
		}else{
			echo "tidak";
		}
	}

    public function index()// default login ke user
    {
        // $this->load->view('auth/login_user');
	}
	
	public function admin() // VIEW LOGIN ADMIN
	{
		if (($this->session->userdata('email_admin'))) { // Jika ada session admin tidak boleh login lagi
			redirect(base_url('admin'));
		} elseif ($this->session->userdata('email_user')) {
			redirect(base_url());
		} else {
			$this->load->view('auth/login_admin');
		}
	}

	public function user() // VIEW LOGIN USER
	{
		if ($this->session->userdata('email_admin')) { // Jika ada session admin tidak boleh login lagi
			redirect(base_url('admin'));
		} elseif ($this->session->userdata('email_user')) {
			redirect(base_url());
		}  else {
			$this->load->view('login_register/login');
		}
	}

	public function login_admin() // VALIDASI LOGIN ADMIN
	{
		if ($this->session->userdata('email_admin')) {
			redirect(base_url("Admin"));
		} else {
			$this->form_validation->set_rules('email', 'Email Admin', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->admin();
		} else {
			$email		=	$this->input->post('email');
			$password	=	$this->input->post('password');
			$where 		=	"email";
			$cek		= 	$this->Model_login->cek_login($this->_admin, $where, $email, $password);

			if ($cek) { // jika username ada
				foreach ($cek as $row) {
					$this->session->set_userdata('id_user', $row->id_user);
					$this->session->set_userdata('email_admin', $row->email); // PASSING EMAIL KE VIEWS
					$this->session->set_userdata('password', $row->password);
					$this->session->set_userdata('nama_lengkap', $row->nama_lengkap);
					$this->session->set_userdata('jenis_kelamin', $row->jenis_kelamin);
					$this->session->set_userdata('nomor_hp', $row->nomor_hp);
					$this->session->set_userdata('tgl_masuk', date_create($row->post_date));
					// var_dump($cek);die; 
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
	public function login_user() // VALIDASI LOGIN ADMIN
	{
		if ($this->session->userdata('email_user')) {
			redirect(base_url());
		} else {
			$this->form_validation->set_rules('email', 'Email User', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->user();
			} else {
				$email		=	$this->input->post('email');
				$password	=	$this->input->post('password');
				$where 		=	"email";
				$cek		= 	$this->Model_login->cek_login($this->_user, $where, $email, $password);

				if ($cek) { // jika username ada
					foreach ($cek as $row) {
						$this->session->set_userdata('id_user', $row->id_user);
						$this->session->set_userdata('email_user', $row->email); // PASSING EMAIL KE VIEWS
						$this->session->set_userdata('password', $row->password);
						$this->session->set_userdata('nama_lengkap', $row->nama_lengkap);
						$this->session->set_userdata('jenis_kelamin', $row->jenis_kelamin);
						$this->session->set_userdata('nomor_hpppp', $row->nomor_hp);
						// var_dump($cek);die; 
						redirect(base_url("Home"));
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">
					username Password salah</div>');
					$this->user();
				}
			}
		}
		
		
	}

	public function logout()
	{
		if ($this->session->userdata('email_admin')) {
			$this->session->sess_destroy();
			redirect(base_url("admin"));
		}elseif($this->session->userdata('email_user'))
			$this->session->sess_destroy();
			redirect(base_url());
	}
}
