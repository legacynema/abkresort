<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Superadmin extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->load->model("Model_user");
    }


    
    // View Index
    public function index(){
        $this->load->view('template_admin/header');
		$this->load->view('superadmin/sidebar');
		$this->load->view('superadmin/index');
		$this->load->view('template_admin/footer');
    }    
    public function tambah_admin(){
        $this->load->view('template_admin/header');
		$this->load->view('superadmin/sidebar');
		$this->load->view('superadmin/tambahadmin');
		$this->load->view('template_admin/footer');
    }

    public function tambah_user(){
        $data["user"] = $this->Model_user->getAll();
        $this->load->view('template_admin/header');
		$this->load->view('superadmin/sidebar');
		$this->load->view('superadmin/tambahuser', $data);
		$this->load->view('template_admin/footer');
    }
    public function tambah_wisata(){
        $this->load->view('template_admin/header');
		$this->load->view('superadmin/sidebar');
		$this->load->view('superadmin/tambahwisata');
		$this->load->view('template_admin/footer');
    }
    public function tambah_transportasi(){
        $this->load->view('template_admin/header');
		$this->load->view('superadmin/sidebar');
		$this->load->view('superadmin/tambahtransport');
		$this->load->view('template_admin/footer');
    }

    // ================= BACK END ============

    public function userDelete($id_user = null)
    {
        if (!isset($id_user)) show_404();

		
        if ($this->Model_user->delete($id_user)) {
			redirect('Superadmin/tambah_user');
        }
	}
}
