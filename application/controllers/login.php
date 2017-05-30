<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('mymodel');
	}
	
	function index() {
		$data['err_message'] = "";
		$this->load->view('user/login_view', $data);
	}


	function cek_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$read = $this->mymodel->readData('user', $username, 'user_username')->result_array();
		foreach ($read as $r) {
			$user = $r['user_username'];
			$nama = $r['user_nama'];
			$email = $r['user_email'];
			$pass = $r['user_password'];
			$path = $r['user_path'];
		}
		
		$hashed_password = $this->mymodel->login($password);
		if ($username==$user) {
			if ($password==$pass) {
				$data = array(
			        'username'  => $user,
			        'email'     => $email,
			        'nama' => $nama,
			        'path' => $path, 
				);
				$this->session->set_userdata($data);
				redirect(base_url('index.php/user'));
			}
			else{
				redirect(base_url('index.php/login'));
			}
		}
		else{
			redirect(base_url('index.php/login'));
		}


	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/user'));
	}
	
	function ubahPass(){
		$username = $this->session->userdata('username');
		$pasBaru = $this->
		$data = $this->login_model->readData('admin', $username)->result_array();
		foreach ($data as $d) {
			$password = $d['admin_password'];
		}
		$passLama = $this->login_model->login($this->input->post('pass-lama'));
		if ($passLama == $password) {
			echo 'yups ner';
		}
	}
	
}