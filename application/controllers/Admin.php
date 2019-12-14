<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
			"Model_penginapan",
			"Model_jenisPenginapan",
			"Model_transport",
			"Model_tempatTransport",
			"Model_jenisTransport",
			"Model_kota",
			"Model_class",
			"Model_wisata",
			"Model_transaksi",
			"Model_paket",
			"Model_user",
			"Model_admin",
			"Model_super_admin",
			/*MODEL UNTUK LOGIN */
			"Model_login"));
		
		$this->load->library('form_validation');

		if (!($this->session->userdata('email'))) {
            redirect(base_url('Auth/admin'));
            // redirect($this->index());
        }
	}
	public function index()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/index');
		$this->load->view('template_admin/footer');
	}
	
	// MENU SIDEBAR ADMIN
	public function tambah_penginapan()
	{
		$data["kota"] = $this->Model_kota->getAll();
		// $data["jenis_penginapan"] = $this->Model_jenisPenginapan->getAll();
		$data["penginapan"] = $this->Model_penginapan->getAll();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambahpenginapan', $data);
		$this->load->view('template_admin/footer');
	}
	
	public function tambah_transport()
	{
		$data["transport"] = $this->Model_transport->getAll();
		$data["jenis_transport"] = $this->Model_jenisTransport->getAll();
		$data["class"] = $this->Model_class->getAll();
		$data["tempat_transport"] = $this->Model_tempatTransport->getAll();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambahtransport', $data);
		$this->load->view('template_admin/footer');
	}
	public function tambah_wisata()
	{
		$data["wisata"] = $this->Model_wisata->getAll();
		$data["kota"] = $this->Model_kota->getAll();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambahwisata', $data);
		$this->load->view('template_admin/footer');
	}

	// START KHOSY
	public function tambah_paket()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambahpaket');
		$this->load->view('template_admin/footer');
	}
	public function tambah_user()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambahuser');
		$this->load->view('template_admin/footer');
	}
	public function tambah_admin()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambahadmin');
		$this->load->view('template_admin/footer');
	} // END KHOSY

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

	// CRUD PENGINAPAN
    public function penginapanAdd()
    {
		$tambah = $this->Model_penginapan;
		
        $tambah->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('Admin/tambah_penginapan');
    }

    public function penginapanEdit($id_penginapan = null)
    {
		var_dump($id_penginapan);
        if (!isset($id_penginapan)) redirect('Admin/tambah_penginapan');

		$var = $this->Model_penginapan;
		$data["kota"] = $this->Model_kota->getAll();
		$data["penginapan"] = $this->Model_penginapan->getById($id_penginapan);
		if (!$data["penginapan"]) show_404();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/editPenginapan', $data);
		$this->load->view('template_admin/footer');
		
		$validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
			$this->session->set_flashdata('success', 'Berhasil di Edit');
			redirect('Admin/tambah_penginapan');
		}
	}

	public function penginapanDelete($id_penginapan = null)
    {
        if (!isset($id_penginapan)) show_404();

		
        if ($this->Model_penginapan->delete($id_penginapan)) {
			redirect('Admin/tambah_penginapan');
        }
	}
	

	//CRUD TRANSPORT
	public function transportasiAdd()
    {
        $tambah = $this->Model_transport;
        
            $tambah->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('Admin/tambah_transport');
        
    }

	public function transportEdit($id = null)
    {
		var_dump($id);
        if (!isset($id)) redirect('Admin/tambah_penginapan');

		$var = $this->Model_transport;
		$data["transport"] = $this->Model_penginapan->getById($id);
		$data["jenis_transport"] = $this->Model_jenisTransport->getAll();
		$data["class"] = $this->Model_class->getAll();
		$data["tempat_transport"] = $this->Model_tempatTransport->getAll();
		if (!$data["transport"]) show_404();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/editTransport', $data);
		$this->load->view('template_admin/footer');
		
		$validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
			$this->session->set_flashdata('success', 'Berhasil di Edit');
			redirect('Admin/tambah_penginapan');
		}
	}

	public function transportasiDelete($id_transport = null)
    {
        if (!isset($id_transport)) show_404();

		
        if ($this->Model_transport->delete($id_transport)) {
			redirect('Admin/tambah_transport');
        }
	}

	//CRUD WISATA
	public function dataWisata()
    {
		$data["jenis_transport"] = $this->Model_jenisTransport->getAll();
		$data["transport"] = $this->Model_transport->getAll();
		$data["kota"] = $this->Model_kota->getAll();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambahtransport', $data);
		$this->load->view('template_admin/footer');
        
	}
	
	public function wisataAdd()
    {
		$tambah = $this->Model_wisata;
		
            $tambah->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('Admin/tambah_wisata');
        
    }

	public function wisataDelete($id_wisata = null)
    {
        if (!isset($id_wisata)) show_404();

		
        if ($this->Model_wisata->delete($id_wisata)) {
			redirect('Admin/tambah_wisata');
        }
	}

	//CRUD TRANSAKSI
	public function dataTransaksi()
    {
		$data["user"] = $this->Model_user->getAll();
		$data["paket"] = $this->Model_paket->getAll();
		$data["penginapan"] = $this->Model_penginapan->getAll();
		$data["transport"] = $this->Model_transport->getAll();
		$data["wisata"] = $this->Model_wisata->getAll();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/transaksi');
		$this->load->view('template_admin/footer');
        
	}
	
	public function transaksiAdd()
    {
		$tambah = $this->Model_transaksi;
		
            $tambah->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('Admin/transaksi');
        
    }

	public function transaksiDelete($id_penginapan = null)
    {
        if (!isset($id_penginapan)) show_404();

		
        if ($this->Model_transaksi->delete($id_penginapan)) {
			redirect('Admin/transaksi');
        }
	}


}
