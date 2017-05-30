<?php 

class Admin extends CI_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->model('admin_model');
	}	

	function index(){
		$data['err_message'] = "";
		$this->load->view('admin/login_admin', $data);
	}

	function setting(){
		if ($this->session->has_userdata('username')) {
			$this->load->view('admin/setting');
		}
		else{
			redirect(base_url('index.php/admin/login'));
		}
	}
	function login(){
		$this->load->view('admin/dashboard');
	}
	function product(){
		if ($this->session->has_userdata('username')) {
			$data = $this->admin_model->read('produk');
			$tampil['produk'] = $data;
			$this->load->view('admin/product', $tampil);;
		}
		else{
			redirect(base_url('index.php/admin/product'));
		}
	}
	function add(){
		if ($this->session->has_userdata('username')) {
			$this->load->view('admin/addProduct');
		}
		else{
			redirect(base_url('index.php/admin/login'));
		}

	}

	function cek_login(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$read = $this->admin_model->readDataAdmin($username);
		foreach ($read as $r) {
			$user = $r['admin_username'];
			$nama = $r['admin_nama'];
			$email = $r['admin_email'];
			$pass = $r['admin_password'];
		}
		
		$hashed_password = $this->admin_model->login($password);
		if ($username==$user) {
			if ($password==$pass) {
				$data = array(
			        'username'  => $user,
			        'email'     => $email,
			        'nama' => $nama,
			   
				);
				$this->session->set_userdata($data);
				redirect(base_url('index.php/admin/login'));
			}
			else{
				redirect(base_url('index.php/admin'));
			}
		}
		else{
			redirect(base_url('index.php/admin'));
		}
		// $username = $this->input->post('username');
		// $password = $this->input->post('password');
		// $read = $this->admin_model->readDataAdmin($username, $password);
		// if($read){
		// 	echo "benar";
		// }
		/*
		if ($username==$user) {
			if ($hashed_password==$pass) {
				$data = array(
			        'username'  => $user,
			        'email'     => $email,
			        'nama' => $nama, 
				);
				$this->session->set_userdata($data);
				redirect(base_url('index.php/admin/login'));
			}
			else{
				redirect(base_url('index.php/admin'));
			}
		}
		else{
				redirect(base_url('index.php/admin'));
		}*/
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/admin'));
	}

	function tambahProduk(){
		$config['upload_path']          = './assets/produk/image/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar')) {
			echo print_r(array('error' => $this->upload->display_errors()));	
			//redirect(base_url());
		}
		else{
			//$url = base_url().$config['upload_path'].$this->upload->admin_model('file_name');
			$url=$this->upload->data();
			$image= $url['file_name'];
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$harga = $this->input->post('harga');
			$kategori = $this->input->post('kategori');
			$detail = $this->input->post('detail');
			$data = array(
				'id_produk' => $id,
				'nama_produk' => $nama,
				'harga_produk' => $harga,
				'kategori_produk' => $kategori,
				'detail_produk' => $detail,
				'harga_produk' => $harga,
				'gambar_produk' => $image, 
				);
			$this->admin_model->insertData('produk', $data);
			redirect($uri = base_url('index.php/admin/add'), $method = 'auto', $code = NULL);
		}
	}
	function editData($id){
		$update = $this->admin_model->getDataProduk("where id_produk = '$id'");

			$image= $update[0]['gambar_produk'];
			$id_produk = $update[0]['id_produk'];
			$nama = $update[0]['nama_produk'];
			$harga = $update[0]['harga_produk'];
			$detail = $update[0]['detail_produk'];
			$kategori = $update[0]['kategori_produk'];
			$data = array(
				'id_produk' => $id_produk,
				'nama_produk' => $nama,
				'harga_produk' => $harga,
				'kategori_produk' => $kategori,
				'detail_produk' => $detail,
				'harga_produk' => $harga,
				'gambar_produk' => $image, 
				);
		$this->load->view('admin/editData', $data);
	}

	function do_editData(){
		$config['upload_path']          = './assets/produk/image/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar')) {
			echo print_r(array('error' => $this->upload->display_errors()));	
			//redirect(base_url());
		}
		else{
			//$url = base_url().$config['upload_path'].$this->upload->admin_model('file_name');
			$id = $_POST['id'];
			$where = array('id_produk' => $id);

			$url=$this->upload->data();
			$image= $url['file_name'];
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$harga = $this->input->post('harga');
			$kategori = $this->input->post('kategori');
			$detail = $this->input->post('detail');
			$data = array(
				'id_produk' => $id,
				'nama_produk' => $nama,
				'harga_produk' => $harga,
				'kategori_produk' => $kategori,
				'detail_produk' => $detail,
				'harga_produk' => $harga,
				'gambar_produk' => $image, 
				);
			$this->admin_model->updateData('produk', $data, $where);
			redirect($uri = base_url('index.php/admin/add'), $method = 'auto', $code = NULL);
		}
	}

	function deleteData($id){  
		$where = array('id_produk' => $id ); 
		$res = $this->admin_model->deleteData($where); 	
		redirect($uri = base_url('index.php/admin/product'), $method = 'auto', $code = NULL);
 	}

	function ubahPass(){
		$username = $this->session->userdata('username');
		$pasBaru = $this->
		$data = $this->admin_model->readDataAdmin('admin', $username)->result_array();
		foreach ($data as $d) {
			$password = $d['admin_password'];
		}
		$passLama = $this->admin_model->rahasia($this->input->post('pass-lama'));
		if ($passLama == $password) {
			echo 'yups ner';
		}
	}
	

}
 ?>