<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

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
	public function flight()
	{	$this->load->view('navbar');
        $this->load->view('searching/search_flight');
		$this->load->view('footer');
	}
	
	public function hotel()
	{	$this->load->view('navbar');
        $this->load->view('searching/hotel');
		$this->load->view('footer');
    }
    
    


}
