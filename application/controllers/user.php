<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index() {
		$this->load->view('user/home');
	}
	
	public function setting() {
		$this->load->view('user/setting_view');

	}

	function edit_data() {
		$user_username = $_POST['username'];
		$user_password = $_POST['password'];
		
		//$url = base_url().$config['upload_path'].$this->upload->data('file_name');
		$data_update = array (
			'user_username' => $user_username,
			'user_password' => $user_password,
			
			);
		// 	'user_path' => $url);
		$where = array('user_username' => $this->session->userdata('username'));
		$res = $this->mymodel->UpdateData('user', $data_update, $where);
		echo $res;
		redirect('user');
	}

	public function email() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
    	$this->form_validation->set_rules('message', 'Message', 'required');
		
		if($this->form_validation->run() == FALSE)  {
			$this->load->view('user/email_view');
		} else {
			$sender_email = "arakhrn@gmail.com";
			$user_password = "qwertyuioP0987654321";
			$username = "arakhrn";
			$receiver_email = "arakhrn@yahoo.com";
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
			$data = $message;
			$this->emailConfig();
				// Sender email address
			$this->email->from($sender_email, $username);
			// Receiver email address.for single email
			$this->email->to($receiver_email);
			//send multiple email
			//$this->email->to("abc@gmail.com,xyz@gmail.com,jkl@gmail.com");
			// Subject of email
			$this->email->subject($subject);
			// Message in email
			$this->email->message($data);
			// It returns boolean TRUE or FALSE based on success or failure
			$mail = ($this->email->send()) ? "Sent" : "Failed" ;
			echo $this->email->print_debugger();
			echo $mail;
			
			redirect('user');
		}
	}

	private function emailConfig() {
		$config = array(
			'protocol' 	=> 'smtp' , 
			'smtp_host' => 'ssl://smtp.googlemail.com' , 
			'smtp_port' => 465 , 
			'smtp_user' => 'arakhrn@gmail.com' ,
			'smtp_pass' => 'qwertyuioP0987654321',
			'mailtype'	=> 'html', 
			'charset' 	=> 'utf-8', 
			'newline' 	=> "\r\n",  
			'wordwrap' 	=> TRUE 
		);
		// Load email library and passing configured values to email library
		$this->load->library('email',$config);

	}

	function gallery(){
		$this->load->view('user/gallery');
	}

	function profile(){
		$this->load->view('user/profile');
	}
}
	

	

