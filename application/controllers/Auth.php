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
		if ($this->session->userdata('email')) {
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
		if (($this->session->userdata('email'))) { // Jika ada session admin tidak boleh login lagi
			redirect(base_url('admin'));
		} elseif ($this->session->userdata('nig_guru')) {
			redirect(base_url('guru'));
		} elseif ($this->session->userdata('nisn')) {
			redirect(base_url('siswa'));
		} else {
			// $data['judul']	=	'Login Admin';
			// $this->load->view('auth/header', $data);
			$this->load->view('auth/login_admin');
			// $this->load->view('auth/footer');
		}
	}

	public function user() // VIEW LOGIN USER
	{
		$this->load->view("auth/login_user");
	}

	public function login_admin() // VALIDASI FORM ADMIN
	{
		if ($this->session->userdata('email')) {
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
					$this->session->set_userdata('email', $row->email); // PASSING EMAIL KE VIEWS
					$this->session->set_userdata('nama_lengkap', $row->nama_lengkap);
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

	public function logout()
	{
		if ($this->session->userdata('email')) {
			$this->session->sess_destroy();
			redirect(base_url("admin"));
		}
		// $this->session->sess_destroy();
		// redirect(base_url());
	}
}
