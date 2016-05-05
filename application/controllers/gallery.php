<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index(){
	    $data = $this->model->GetGallery();
        $this->load->view('header');
		$this->load->view('gallery', array('data' => $data));
        $this->load->view('footer');
	}

}