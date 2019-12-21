<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        //CRUD SISWA
        $this->load->model("Model_user");
        $this->load->model("Model_admin");
		$this->load->model("Model_login");
		$this->load->model("Model_paketWisata");
		
	}
	
	
	public function index()
	{	$data["paketW"] = $this->Model_paketWisata->getAll();
		$this->load->view('navbar');
        $this->load->view('home_template/home_view', $data);
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
	

	public function myaccount()
	{
		if ($this->session->userdata('email_user')) {
            $data['user'] = $this->db->get_where('user',['id_user' => $this->session->userdata('id_user')])->result_object();
			$this->load->view('navbar');
			$this->load->view('users/myprofile', $data);
		}elseif(($this->session->userdata('email_admin'))){
			redirect(base_url('Admin'));
		}else{
			redirect(base_url('Home/login'));
		}
		
		// $this->load->view('footer');
	}

	public function editprofile(){
		if ($this->session->userdata('email_user')) {
			if (!$this->session->flashdata('berhasil')) {
				$this->load->view('navbar');
				$this->load->view('users/editprofile');
			}else{
				$this->load->view('navbar');
				$this->load->view('users/editprofile');
				header('Refresh:3; url= '. base_url('Home/myaccount')); 
			}


		}elseif(($this->session->userdata('email_admin'))){
			redirect(base_url('Admin'));
		}else{
			redirect(base_url('Home/login'));
		}
		
	}

	public function prosesedit(){
		if (!$this->input->post()) {
			redirect(base_url());
		}
		$data = [
			"nama_lengkap" 			=>	$this->input->post('nama_lengkap'),
			// "password" 		=> 	if($this->input->post('password') != NULL) {
			// 	md5($this->input->post('password'));
			// },
			"password" 		=> 	md5($this->input->post('password')),
			"jenis_kelamin" => 	$this->input->post('jenis_kelamin'),
			"email" 		=> 	$this->input->post('email'),
			"nomor_hp"			=> 	$this->input->post('nomorhp'),
			"foto"			=> 	$this->input->post('foto'),
		];
		$query = $this->db->update('user',$data,['id_user' => $this->session->userdata('id_user')]);
		
		if ($query) {
			$this->session->set_flashdata('berhasil','<div class="alert alert-success">
				Data berhasil diubah</div>');
			redirect(base_url('Home/editprofile'));
		}
		// var_dump($query);die;
	}
	
}
