<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination extends CI_Controller {

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
	public function malang()
	{
        $this->load->view('navbar');
		$this->load->view('destination_template/destination_view');
        $this->load->view('footer');   
     }
	
	 public function surabaya()
	 {
		$this->load->view('navbar');
		$this->load->view('destination_template/destination_view_surabaya');

		$this->load->view('footer');   

	 }
	 public function manado()
	 {
		$this->load->view('navbar');
		$this->load->view('destination_template/destination_view_manado');
		$this->load->view('footer');   
	 }
	 public function yogyakarta(){
		$this->load->view('navbar');
		$this->load->view('destination_template/destination_view_yogyakarta');
		$this->load->view('footer');
	 }

	 public function ambon(){
		$this->load->view('navbar');
		$this->load->view('destination_template/destination_view_ambon');
		$this->load->view('footer');
	 }

	 public function medan(){
		$this->load->view('navbar');
		$this->load->view('destination_template/destination_view_medan');
		$this->load->view('footer');
	 }

	 public function bandung(){
		$this->load->view('navbar');
		$this->load->view('destination_template/destination_view_bandung');
		$this->load->view('footer');
	 }
	 public function jakarta(){
		$this->load->view('navbar');
		$this->load->view('destination_template/destination_view_jakarta');
		$this->load->view('footer');
	 }
}
