<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination extends CI_Controller {

	public function malang(){
        $this->load->view('navbar');
		$this->load->view('destination_template/destination_view');
        $this->load->view('footer');   
     }
	
	 public function surabaya(){
		$this->load->view('navbar');
		$this->load->view('destination_template/destination_view_surabaya');
		$this->load->view('footer');   
	 }

	 public function manado(){
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

	 public function lombok(){
		$this->load->view('navbar');
		$this->load->view('destination_template/destination_view_lombok');
		$this->load->view('footer');
	 }
	 
	 public function bali(){
		$this->load->view('navbar');
		$this->load->view('destination_template/destination_view_bali');
		$this->load->view('footer');
	 }
}
