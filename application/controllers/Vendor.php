<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

	function __construct(){
        parent::__construct();

           if($this->session->userdata('status') != "vendor"){
            redirect(site_url("Vend"));
        }
        $this->load->model('model_products');
        $this->load->model('model_program');
        $this->load->model('model_vendor');

     }


	public function index()
	{
		 $this->load->view('vendor/include/header.php');
		$this->load->view('vendor/include/sidebar.php');
		$this->load->view('vendor/include/navbar.php');
		$this->load->view('vendor/dashboard.php');
		$this->load->view('vendor/include/footer.php');
	}

	public function pasien(){
        $this->load->library('pagination');
       
        $config['base_url'] = site_url('Vendor/pasien'); //site url
        $config['total_rows'] = $this->db->count_all('vendor'); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 3;  // urldecode(str)i parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->model_vendor->get_order_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();

        $this->load->model('model_products');;
        $this->load->view('vendor/include/header.php');
        $this->load->view('vendor/include/sidebar.php');
        $this->load->view('vendor/include/navbar.php');
        $this->load->view('vendor/vendor', $data);
        $this->load->view('vendor/include/footer.php');
    }

    public function notes($id_order = null)
    {
        if (!isset($id_order)) redirect('admin/Vendor');
       
        $vendor = $this->model_vendor;
        $validation = $this->form_validation;
        $validation->set_rules($vendor->rules1());

        if ($validation->run()) {
            $vendor->inputNotes();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["order"] = $vendor->getorder($id_order);
        if (!$data["order"]) show_404();

        $this->load->view('vendor/include/header.php');
        $this->load->view('vendor/include/sidebar.php');
        $this->load->view('vendor/include/navbar.php');
        $this->load->view('vendor/notes',$data);
        $this->load->view('vendor/include/footer.php');
    }

    
}

/* End of file Vendor.php */
/* Location: ./application/controllers/Vendor.php */