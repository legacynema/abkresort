<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->database();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->load->model("Model_penginapan");
		$this->load->model("Model_jenisPenginapan");
		$this->load->model("Model_kota");
		

	}
	public function index()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/index');
		$this->load->view('template_admin/footer');
	}
	public function tambah_penginapan()
	{
		$data["kota"] = $this->Model_kota->getAll();
		$data["jenis_penginapan"] = $this->Model_jenisPenginapan->getAll();
		$data["penginapan"] = $this->Model_penginapan->getAll();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambahpenginapan', $data);
		$this->load->view('template_admin/footer');
	}
	public function tambah_transport()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambahtransport');
		$this->load->view('template_admin/footer');
	}
	public function tambah_wisata()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambahwisata');
		$this->load->view('template_admin/footer');
	}

	// VIEWS LIST USER
	public function user_aktif()
	{ }
	public function user_nonaktif()
	{ }

	// VIEWS TRANSAKSI
	public function transaksi()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/transaksi');
		$this->load->view('template_admin/footer');
	}
	// VIEWS LAPORAN
	public function laporan()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/laporan');
		$this->load->view('template_admin/footer');
	}

	// Login admin
	public function loginadmin()
	{
		$this->load->view('auth/login_admin');
	}

	// ============================= BACK END ==============================

	// menampilkan data penginapan dari Database
	public function dataPenginapan()
    {
		$data["penginapan"] = $this->Model_penginapan->getAll();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambahpenginapan', $data);
		$this->load->view('template_admin/footer');
        
    }



    public function penginapanAdd()
    {
        $tambah = $this->Model_penginapan;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kota"] = $this->Model_kota->getAll();
		$data["jenis_penginapan"] = $this->Model_jenisPenginapan->getAll();
		$data["penginapan"] = $this->model_penginapan->getAll();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambahpenginapan', $data);
		$this->load->view('template_admin/footer');
    }

    public function penginapanEdit($id_penginapan = null)
    {
        // var_dump($id);
        if (!isset($id_penginapan)) redirect('c_siswa');


        $var = $this->model_penginapan;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["kelas"] = $this->Model_kelas->getAll();
        $data["jurusan"] = $this->Model_jurusan->getAll();
        $data["siswa"] = $var->getById($id_penginapan);
        if (!$data["siswa"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/editsiswa", $data);
        $this->load->view("template_admin/footer");
	}
	
	public function penginapanDelete($id_penginapan = null)
    {
        if (!isset($id_penginapan)) show_404();

		
        if ($this->Model_penginapan->delete($id_penginapan)) {
		$data["kota"] = $this->Model_kota->getAll();
		$data["jenis_penginapan"] = $this->Model_jenisPenginapan->getAll();
		$data["penginapan"] = $this->model_penginapan->getAll();
			$this->load->view('template_admin/header');
			$this->load->view('template_admin/sidebar');
			$this->load->view('admin/tambahpenginapan', $data);
			$this->load->view('template_admin/footer');
        }
    }
	

}
