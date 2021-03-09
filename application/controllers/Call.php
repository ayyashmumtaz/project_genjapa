<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Call extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('status') != "user"){
			redirect(site_url("Login"));
		}
		$this->load->model('model_dokter');
		$this->load->model('model_products');
		$data['call']= $this->model_products->allcall();
		$data['call_selesai']= $this->model_products->allcallselesai();
		$data['dokterr'] = $this->model_dokter->allmenu();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/call_order.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function add($id)
	{
		 if($this->session->userdata('status') != "user"){
			redirect(site_url("login"));
		}
		$this->load->model('model_dokter');
		$user = $this->session->userdata("nama");
		$product = $this->model_dokter->find($id);
		$data = array(
					   'id_order'=> uniqid(),
					   'id'      => $product->id,
					   'user'	 => $user,
					   'qty'     => 1,
					   'price'   => $product->harga,
					   'name'    => $product->nama,
					   'kategori'=> 1
					);
 		$this->db->insert('order', $data);
		$this->cart->insert($data);
		redirect(site_url('Cart'));
	}

}

/* End of file Call.php */
/* Location: ./application/controllers/Call.php */