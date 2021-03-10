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


public function kategori_wisata()
{
	$data['vendor'] = $this->model_vendor->kategori_wisata();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/kategori_wisata.php', $data);
		$this->load->view('user/_partials/footer');
}
public function kategori_hotel()
{
	$data['vendor'] = $this->model_vendor->kategori_hotel();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/kategori_hotel.php', $data);
		$this->load->view('user/_partials/footer');
}
public function kategori_travel()
{
	$data['vendor'] = $this->model_vendor->kategori_travel();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/kategori_travel.php', $data);
		$this->load->view('user/_partials/footer');
}
public function kategori_edupreneur()
{
	$data['vendor'] = $this->model_vendor->kategori_edupreneur();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/kategori_edupreneur.php', $data);
		$this->load->view('user/_partials/footer');
}
public function kategori_kopi()
{
	$data['vendor'] = $this->model_vendor->kategori_kopi();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/kategori_kopi.php', $data);
		$this->load->view('user/_partials/footer');
}

public function kategori_obat()
{
	$data['vendor'] = $this->model_vendor->kategori_obat();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/kategori_obat.php', $data);
		$this->load->view('user/_partials/footer');
}

public function kategori_tour()
{
	$data['vendor'] = $this->model_vendor->kategori_tour();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/kategori_tour.php', $data);
		$this->load->view('user/_partials/footer');
}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */