<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        //CRUD SISWA
        $this->load->model("Model_user");
	}
	
	
	public function index()
	{	
		$this->load->view('navbar');
        $this->load->view('home_template/home_view');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('navbar');
		$this->load->view('login_register/login');
		$this->load->view('footer');
	}

	public function register()
	{
		$this->load->view('navbar');
		$this->load->view('login_register/register');
		$this->load->view('footer');
	}

	public function profilUser()
	{
		$this->load->view('navbar');
		$this->load->view('user/profil_user');
		$this->load->view('footer');
	}

	// ==============================================
	// ======== BACK END ============================
	// ==============================================

	public function userAdd()
    {
        	$tambah = $this->Model_user;
            $tambah->save();
			$this->session->set_flashdata('success', 'Berhasil Daftar, Silahkan Login');
        	redirect('Home/login');
    }
	
}
