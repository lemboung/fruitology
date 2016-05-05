<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

	public function index(){
        $this->load->view('header');
		$this->load->view('contacts');
        $this->load->view('footer');
	}

	public function send_mail(){
		$from = $_POST['email'];
		$name = $_POST['name'];
		$number = $_POST['number'];

		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'gardeniarestomalang@gmail.com',
			'smtp_pass' => 'gardenia28',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);

		$message = "from: ".$from."<br>name: ".$name."<br>telp number: ".$number."<br>message: ".$_POST['message'];
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");  
		$this->email->from($_POST['email']);
		$this->email->to('gardeniarestomalang@gmail.com');
		$this->email->subject('kritik & saran');
		$this->email->message($message);
		
		if($this->email->send()) {
     		$this->load->view('send_sukses');
		} else {
     		$this->load->view('send_gagal');
		}
	}

}