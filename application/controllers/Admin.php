<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/content');
		$this->load->view('template_admin/footer');
	}
	public function tambah_penginapan()
	{ }
	public function tambah_transport()
	{ }
	public function tambah_wisata()
	{ }

	// VIEWS EDIT DATA
	public function edit_penginapan()
	{ }
	public function edit_transport()
	{ }
	public function edit_transaksi()
	{ }
	public function edit_wisata()
	{ }

	// VIEWS LIST USER
	public function user_aktif()
	{ }
	public function user_nonaktif()
	{ }

	// VIEWS TRANSAKSI
	public function transaksi()
	{ }
	// VIEWS LAPORAN
	public function laporan()
	{ }
}
