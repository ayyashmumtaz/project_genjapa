<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('model_products');
	$this->load->model('model_vendor');
}
	public function index()
	{
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/kategori_reservasi.php',);
		$this->load->view('user/_partials/footer');
	}

	public function detail($id = null)
	{

		 $product = $this->model_products;
        $data["product"] = $product->getById($id);

		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/p_detail.php', $data);
		$this->load->view('user/_partials/footer');
	}
	public function detail_vendor($id = null)
	{
		
		$data2 = $this->model_vendor;
		$data["produk"] = $data2->data_with_id($id);
        $data["vendor"] = $data2->getById($id);
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/vendor_detail.php', $data);
		$this->load->view('user/_partials/footer');
	}



	public function add($id)
	{
		 if($this->session->userdata('status') != "user"){
			redirect(site_url("login"));
		}

		$user = $this->session->userdata("nama");
		$product = $this->model_products->find($id);
		$data = array(
					   'id_order'=> uniqid(),
					   'id'      => $product->id,
					   'user'	 => $user,
					   'qty'     => 1,
					   'price'   => $product->price,
					   'name'    => $product->name
					);
 		$this->db->insert('order', $data);
		$this->cart->insert($data);
		redirect(site_url('Cart'));
	}


}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */