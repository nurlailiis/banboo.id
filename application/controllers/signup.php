<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
	function __construct() {
        parent::__construct();
		// Load database
		$this->load->model('mymodel');
    }

	public function index()
	{
		//$sql = $this->signup_model->cipher_encrypt();
		$this->load->view('user/signup_view');
	}
	  
	public function new_user_registration() {
		$config['upload_path'] 		= './assets/images/user/';
		$config['allowed_types'] 	= 'gif|jpg|jpeg|png';
		$config['max_size']			= 10000;
		$config['max_width'] 		= 10000;
		$config['max_height'] 		= 10000;

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('gambar')) {
			echo print_r(array('error' => $this->upload->display_errors()));
		} else {
			//$url = substr($this->do_upload(), 1);
			$user_username = $this->input->post('username', 'trim|required');
			$user_nama = $this->input->post('name', 'trim|required');
			$user_email = $this->input->post('email', 'trim|required');
			$user_password = $this->input->post('password', 'trim|required');
			$url = base_url().$config['upload_path'].$this->upload->data('file_name');
			$data = array ('user_username' => $user_username,
			'user_nama' => $user_nama,
			'user_email' => $user_email,
			'user_password' => $user_password,
			'user_path' => $url);
			
			$insert = $this->mymodel->addData($data);
			redirect($uri = base_url('index.php/login'), $method='auto', $code=NULL);
		}
	}


	public function do_upload() {
		$type = explode('.', $_FILES["gambar"]["name"]);
		$type = $type[count($type)-1];
		$user_path = "./images/user/".uniqid(rand()).".".$type;
		if(in_array($type, array("jpg" ,"jpeg", "gif", "png"))) 
			if(is_uploaded_file($_FILES["gambar"]["tmp_name"]))
				if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $url));
			return $url;
			return "";
	}
}
?>