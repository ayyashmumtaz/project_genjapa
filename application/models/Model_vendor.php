<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_vendor extends CI_Model {

    function cek_login($table,$where){      
        return $this->db->get_where($table,$where);
    }
    function tampil_data(){
        return $this->db->get('vendor');
    }
    public function allorder(){
        $hasil = $this->db->get('order');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }
    public function allorder_notbayar(){
        $hasil = $this->db->where('status', 0)
                            ->get('order');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }
    public function allorder_bayar(){
        $hasil = $this->db->where('status', 1)
        ->get('order');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }




 public function data_with_id()
    {
        $this->db->select('
          vendor.*, product.id AS id_product, product.name, 
        ');
        $this->db->join('product', 'vendor.id = product.id_vendor');
        $this->db->from('vendor');
        $query = $this->db->get();
        return $query->result();
    }




    public function allorder_finish(){
        $hasil = $this->db->where('status', 2)
        ->get('order');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }

    public function justvend(){
        $data = $this->session->userdata('nama');
          $hasil = $this->db->select('*')
                            ->where('id_vendor', $data)
                            ->get('order');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }
    function get1(){
        $query = $this->db->query('SELECT * FROM vendor');
        return $query->result();
    }

public function indexvendor(){
          $hasil = $this->db->select('*')
                            ->limit(5)
                            -> order_by('tgl_daftar', 'ASC')
                            ->get('vendor');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }
    public function berandavendor(){
        $dom = $this->session->userdata('domisili');
          $hasil = $this->db->select('*')
                            ->where('domisili', $dom)
                            ->limit(5)
                            ->get('vendor');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }


    public function vendorr(){
        $data = $this->session->userdata('nama');
          $hasil = $this->db->select('*')
                            ->where('username', $data)
                            ->get('vendor');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }
	public function get_mahasiswa_list($limit, $start){
        $query = $this->db->get('vendor', $limit, $start);
        return $query;
    }
     
	public function find($id){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id', $id)
						  ->limit(1)
						  ->get('vendor');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		} 
	}

     public function searchvendor($keyword){
    $this->db->like('nis', $keyword);
    $this->db->or_like('nama', $keyword);
    $this->db->or_like('jenis_kelamin', $keyword);
    $this->db->or_like('telp', $keyword);
    $this->db->or_like('alamat', $keyword);
    
    $result = $this->db->get('siswa')->result(); // Tampilkan data siswa berdasarkan keyword
    
    return $result; 
  }	


 private $_table = "vendor";

    public $id;
    public $username;
    public $password;
    public $nama;
    public $image = "default.jpg";
    public $deskripsi;
    public $kategori;


    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required'],

            ['field' => 'kategori',
            'label' => 'Kategori',
            'rules' => 'required']
            
        ];
    }

        public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->image = $this->_uploadImage();
        $this->deskripsi = $post["deskripsi"];
        $this->kategori = $post["kategori"];
        $this->nama = $post["nama"];
        
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->image = $this->_uploadImage();
        $this->deskripsi = $post["deskripsi"];
        $this->kategori = $post["kategori"];
        $this->nama = $post["nama"];

        if (!empty($_FILES["image"]["name"])) {
  		 	$this->image = $this->_uploadImage();
	} else {
    		$this->image = $post["old_image"];
}		

        
        
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function deleteVendor($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

private $_tolol = "notification";
    public function deleteNotif ($id)
    {
        return $this->db->delete($this->_tolol, array("id" => $id));
    }


public function jumlahVendor()
{   
    $query = $this->db->get('vendor');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}





    
    private function _uploadImage()
{
    $config['upload_path']          = './img/vendor/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
    $config['file_name']            = $this->id;
    $config['overwrite']			= true;
    $config['max_size']             = 2048; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}


}
