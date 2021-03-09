<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

	public function index()
	{
		$this->load->model('model_dokter');
		$data['dokter']=$this->model_dokter->list_dokter();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/kategori_reservasi.php', $data);
		$this->load->view('user/_partials/footer');
	}
	public function detail($id)
	{
		$this->load->model('model_dokter');
		$product = $this->model_dokter;
        $data["product"] = $product->getById2($id);
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/detail_reservasi.php', $data);
		$this->load->view('user/_partials/footer');
	}

}

/* End of file Reservasi.php */
/* Location: ./application/controllers/Reservasi.php */