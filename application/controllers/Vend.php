<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vend extends CI_Controller {

		function __construct(){
		parent::__construct();		
		$this->load->model('model_login');
 
	}
 
	function index(){
		if($this->session->userdata('status') == "vendor"){
			redirect(site_url("vendor"));
		}

		$this->load->view('vendor/include/headlog.php');
        $this->load->view('vendor/login.php');
        $this->load->view('vendor/include/footlog.php');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(

			'username' => $username,
			'password' => $password
			);
		$cek = $this->model_login->cek_login("vendor",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "vendor"
				);
 
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('success-login', 'Berhasil');
 
			redirect(site_url("Vendor"));
 
		}else{
			echo "<script>
     alert('Username atau Password Salah ! Silahkan Masukan Data Anda Dengan Benar!');
   </script>";
   redirect('Vend','refresh');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('Vend'));
	}
}
	



/* End of file Logdoctor.php */
/* Location: ./application/controllers/Logdoctor.php */