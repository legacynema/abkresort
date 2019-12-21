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
			"Model_jenisTempat",
			"Model_kota",
			"Model_class",
			"Model_wisata",
			"Model_transaksi",
			"Model_paket",
			"Model_user",
			"Model_admin",
			"Model_super_admin",
			/*MODEL UNTUK LOGIN */
			"Model_login"
		));


		$this->data['admin'] = $this->db->get_where('admin', ['id_admin' => $this->session->userdata('id_admin')])->result_object();

		$this->load->library('form_validation');

		if (!($this->session->userdata('email_admin'))) {
			redirect(base_url('Auth/admin'));
			// redirect($this->index());
		}
	}
	public function index()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
		$this->load->view('admin/index');
		$this->load->view('template_admin/footer');
	}

	public function myprofile()
	{

		if ($this->session->userdata('email_admin')) {
			$data['admin'] = $this->db->get_where('admin', ['id_admin' => $this->session->userdata('id_admin')])->result_object();
			$this->load->view('template_admin/header');
			$this->load->view('template_admin/sidebar',$this->data);
			$this->load->view('admin/profile', $data);
			$this->load->view('template_admin/footer');
		} elseif (($this->session->userdata('email_admin'))) {
			redirect(base_url('Admin'));
		} else {
			redirect(base_url('Home/login'));
		}
	}
	public function editprofile()
	{

		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
		$this->load->view('admin/editprofile');
		$this->load->view('template_admin/footer');
	}
	public function prosesedit($id_admin = null)
	{

		if (!isset($id_admin)) redirect('Admin');

		$var = $this->Model_admin;
		$data["admin"] = $this->Model_admin->getById($id_admin);
		if (!$data["admin"]) show_404();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
		$this->load->view('admin/editprofile', $data);
		$this->load->view('template_admin/footer');
		$validation = $this->form_validation;
		$validation->set_rules($var->rules());

		if ($validation->run()) {
			$var->update();
			// $this->session->set_flashdata('success', 'Berhasil Reset Password');
			redirect('Admin/myprofile');
		}
	}

	// MENU SIDEBAR ADMIN
	public function tambah_penginapan()
	{
		$data["kota"] = $this->Model_kota->getAll();
		$data["penginapan"] = $this->Model_penginapan->getAll();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
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
		$this->load->view('template_admin/sidebar',$this->data);
		$this->load->view('admin/tambahtransport', $data);
		$this->load->view('template_admin/footer');
	}
	public function tambah_wisata()
	{
		$data["wisata"] = $this->Model_wisata->getAll();
		$data["kota"] = $this->Model_kota->getAll();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
		$this->load->view('admin/tambahwisata', $data);
		$this->load->view('template_admin/footer');
	}

	// START KHOSY
	public function tambah_paket()
	{
		$data["kota"] = $this->Model_kota->getAll();
		$data["penginapan"] = $this->Model_penginapan->getAll();
		$data["wisata"] = $this->Model_wisata->getAll();
		$data["transport"] = $this->Model_transport->getAll();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
		$this->load->view('admin/tambahpaket', $data);
		$this->load->view('template_admin/footer');
	}
	// END KHOSY

	// VIEWS LIST USER
	public function user_aktif()
	{
	}
	public function user_nonaktif()
	{
	}

	// VIEWS TRANSAKSI
	public function transaksi()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
		$this->load->view('admin/transaksi');
		$this->load->view('template_admin/footer');
	}
	// VIEWS LAPORAN
	public function laporan()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
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
		// var_dump($id_penginapan);
		if (!isset($id_penginapan)) redirect('Admin/tambah_penginapan');

		$var = $this->Model_penginapan;
		$data["kota"] = $this->Model_kota->getAll();
		$data["penginapan"] = $this->Model_penginapan->getById($id_penginapan);
		if (!$data["penginapan"]) show_404();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
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
		// var_dump($id);
		if (!isset($id)) redirect('Admin/tambah_penginapan');

		$var = $this->Model_transport;
		$data["transport"] = $this->Model_transport->getById($id);
		$data["jenis_transport"] = $this->Model_jenisTransport->getAll();
		$data["class"] = $this->Model_class->getAll();
		$data["tempat_transport"] = $this->Model_tempatTransport->getAll();
		if (!$data["transport"]) show_404();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
		$this->load->view('admin/editTransport', $data);
		$this->load->view('template_admin/footer');

		$validation = $this->form_validation;
		$validation->set_rules($var->rules());

		if ($validation->run()) {
			$var->update();
			$this->session->set_flashdata('success', 'Berhasil di Edit');
			redirect('Admin/tambah_transport');
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
	public function wisataAdd()
	{
		$tambah = $this->Model_wisata;

		$tambah->save();
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('Admin/tambah_wisata');
	}

	public function wisataEdit($id = null)
	{
		// var_dump($id);
		if (!isset($id)) redirect('Admin/tambah_wisata');

		$var = $this->Model_wisata;
		$data["wisata"] = $this->Model_wisata->getById($id);
		$data["kota"] = $this->Model_kota->getAll();
		if (!$data["wisata"]) show_404();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
		$this->load->view('admin/editWisata', $data);
		$this->load->view('template_admin/footer');

		$validation = $this->form_validation;
		$validation->set_rules($var->rules());

		if ($validation->run()) {
			$var->update();
			$this->session->set_flashdata('success', 'Berhasil di Edit');
			redirect('Admin/tambah_wisata');
		}
	}

	public function wisataDelete($id_wisata = null)
	{
		if (!isset($id_wisata)) show_404();


		if ($this->Model_wisata->delete($id_wisata)) {
			redirect('Admin/tambah_wisata');
		}
	}

	//CRUD TRANSAKSI	
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

	//CRUD PAKET	
	public function paketAdd()
	{
		$tambah = $this->Model_paket;

		$tambah->save();
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('Admin/tambah_paket');
	}

	public function paketEdit($id = null)
	{
		// var_dump($id);
		if (!isset($id)) redirect('Admin/tambah_paket');

		$var = $this->Model_paket;
		$data["paket"] = $this->Model_paket->getById($id);
		$data["kota"] = $this->Model_kota->getAll();
		$data["penginapan"] = $this->Model_penginapan->getAll();
		$data["wisata"] = $this->Model_wisata->getAll();
		$data["transport"] = $this->Model_transport->getAll();
		if (!$data["paket"]) show_404();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
		$this->load->view('admin/editpaket', $data);
		$this->load->view('template_admin/footer');

		$validation = $this->form_validation;
		$validation->set_rules($var->rules());

		if ($validation->run()) {
			$var->update();
			$this->session->set_flashdata('success', 'Berhasil di Edit');
			redirect('Admin/tambah_paket');
		}
	}

	public function paketDelete($id_paket = null)
	{
		if (!isset($id_paket)) show_404();


		if ($this->Model_paket->delete($id_paket)) {
			redirect('Admin/tambah_paket');
		}
	}

	//CRUD USER	
	public function tambah_user()
	{
		$data["user"] = $this->Model_user->getAll();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
		$this->load->view('admin/tambahuser', $data);
		$this->load->view('template_admin/footer');
	}

	public function userEdit($id = null)
	{
		// var_dump($id);
		if (!isset($id)) redirect('Admin/tambah_user');

		$var = $this->Model_user;
		$data["user"] = $this->Model_user->getById($id);
		if (!$data["user"]) show_404();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
		$this->load->view('admin/editPassUser', $data);
		$this->load->view('template_admin/footer');

		$validation = $this->form_validation;
		$validation->set_rules($var->rules());

		if ($validation->run()) {
			$var->updatePass();
			$this->session->set_flashdata('success', 'Berhasil Reset Password');
			redirect('Admin/tambah_user');
		}
	}

	public function userDelete($id_user = null)
	{
		if (!isset($id_user)) show_404();


		if ($this->Model_user->delete($id_user)) {
			redirect('Admin/tambah_user');
		}
	}

	//CRUD ADMIN	
	public function tambah_admin()
	{
		$data["admin"] = $this->Model_admin->getAll();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
		$this->load->view('admin/tambahadmin', $data);
		$this->load->view('template_admin/footer');
	}

	public function adminAdd()
	{
		$tambah = $this->Model_admin;

		$tambah->save();
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('Admin/tambah_admin');
	}

	public function adminEdit($id = null)
	{
		// var_dump($id);
		if (!isset($id)) redirect('Admin/tambah_admin');

		$var = $this->Model_admin;
		$data["admin"] = $this->Model_admin->getById($id);
		if (!$data["admin"]) show_404();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
		$this->load->view('admin/editPassadmin', $data);
		$this->load->view('template_admin/footer');

		$validation = $this->form_validation;
		$validation->set_rules($var->rules());

		if ($validation->run()) {
			$var->updatePass();
			$this->session->set_flashdata('success', 'Berhasil Reset Password');
			redirect('Admin/tambah_admin');
		}
	}

	public function adminDelete($id_admin = null)
	{
		if (!isset($id_admin)) show_404();


		if ($this->Model_admin->delete($id_admin)) {
			redirect('Admin/tambah_admin');
		}
	}

	// CRUD LIST
	public function tambah_list()
	{
		$data["kota"] = $this->Model_kota->getAll();
		$data["jenis_tempat"] = $this->Model_jenisTempat->getAll();
		$data["tempat_transport"] = $this->Model_tempatTransport->getAll();
		$data["jenis_transport"] = $this->Model_jenisTransport->getAll();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$this->data);
		$this->load->view('admin/tambahlist', $data);
		$this->load->view('template_admin/footer');
	}

	public function listTtAdd()
	{
		$tambah = $this->Model_jenisTempat;
		$tambah->save();
		$this->session->set_flashdata('success1', 'Berhasil disimpan');
		redirect('Admin/tambah_list');
	}

	public function listTtDelete($id = null)
	{
		if (!isset($id)) show_404();


		if ($this->Model_jenisTempat->delete($id)) {
			redirect('Admin/tambah_list');
		}
	}

	public function listJtAdd()
	{
		$tambah = $this->Model_jenisTransport;
		$tambah->save();
		$this->session->set_flashdata('success2', 'Berhasil disimpan');
		redirect('Admin/tambah_list');
	}

	public function listJtDelete($id = null)
	{
		if (!isset($id)) show_404();


		if ($this->Model_jenisTransport->delete($id)) {
			redirect('Admin/tambah_list');
		}
	}

	public function listTempTAdd()
	{
		$tambah = $this->Model_tempatTransport;
		$tambah->save();
		$this->session->set_flashdata('success3', 'Berhasil disimpan');
		redirect('Admin/tambah_list');
	}

	public function listTempDelete($id = null)
	{
		if (!isset($id)) show_404();


		if ($this->Model_tempatTransport->delete($id)) {
			redirect('Admin/tambah_list');
		}
	}

	public function allinone(){
		$this->load->view('template_admin/header');
		$this->load->view('admin/allinone');
		$this->load->view('template_admin/footer');
	}
}
