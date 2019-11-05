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
	public function package()
	{	$this->load->view('navbar');
        $this->load->view('input/allinone');
		$this->load->view('footer');
    }
    
    public function flight()
	{	$this->load->view('navbar');
		$this->load->view('input/flight');
		$this->load->view('footer');
    }

    public function penginapan()
	{	$this->load->view('navbar');
        $this->load->view('input/hotel');
		$this->load->view('footer');
    }

    public function travel()
	{	$this->load->view('navbar');
        $this->load->view('input/travel');
		$this->load->view('footer');
    }

    public function car()
	{	$this->load->view('navbar');
        $this->load->view('input/car');
		$this->load->view('footer');
    }

    public function train()
	{	$this->load->view('navbar');
        $this->load->view('input/train');
		$this->load->view('footer');
    }

}
