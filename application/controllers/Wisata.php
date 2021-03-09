<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

	public function index()
	{
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/wisata.php');
		$this->load->view('user/_partials/footer');
	}

}

/* End of file Wisata.php */
/* Location: ./application/controllers/Wisata.php */