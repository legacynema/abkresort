<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
			"Model_penginapan",
			"Model_jenisPenginapan",
			"Model_transport",
			"Model_tempatTransport",
			"Model_jenisTransport",
			"Model_jenisTempat",
			"Model_kota",
			"Model_class",
			"Model_wisata",
			"Model_transaksi",
			"Model_paket",
			"Model_user",
			"Model_admin",
			"Model_super_admin",
			"Model_paketWisata"
		));


		
	}

	public function package()
	{	
		$this->load->view('navbar');
        $this->load->view('input/allinone');
		$this->load->view('footer');
    }
    
    public function flight()
	{	
		$this->load->view('navbar');
		$this->load->view('input/flight');
		$this->load->view('footer');
    }

    public function penginapan()
	{	
		$this->load->view('navbar');
        $this->load->view('input/hotel');
		$this->load->view('footer');
    }

    public function travel()
	{	
		$this->load->view('navbar');
        $this->load->view('input/travel');
		$this->load->view('footer');
    }

    public function car()
	{	
		$this->load->view('navbar');
        $this->load->view('input/car');
		$this->load->view('footer');
    }

    public function train()
	{	
		
		$this->load->view('navbar');
        $this->load->view('input/train');
		$this->load->view('footer');
	}

	public function bus()
	{	
		$this->load->view('navbar');
		$this->load->view('input/bus');
		$this->load->view('footer');
	}	

	public function detail($id = null)
	{	

		if (!isset($id)) redirect('home');

		$var = $this->Model_paket;
		$data["paketW"] = $this->Model_paketWisata->getById($id);
		$data["kota"] = $this->Model_kota->getAll();
		$data["penginapan"] = $this->Model_penginapan->getAll();
		$data["wisata"] = $this->Model_wisata->getAll();
		$data["transport"] = $this->Model_transport->getAll();
		if (!$data["paketW"]) show_404();
		$this->load->view('navbar');
		$this->load->view('detail/detailpaket', $data);
		$this->load->view('footer');
		$validation = $this->form_validation;
		$validation->set_rules($var->rules());

		if ($validation->run()) {
			$var->update();
			$this->session->set_flashdata('success', 'Berhasil di Edit');
			redirect('Admin/tambah_paket');
		}
	}	
	

}
