<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Superadmin extends CI_Controller{
    
    public function __construct(){
        parent:: __construct();
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
}
