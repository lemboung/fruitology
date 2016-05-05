<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resep extends CI_Controller {

	public function index(){
		$data = $this->model->GetBahan();
		$data2 = $this->model->GetResep();
        $this->load->view('header');
		$this->load->view('resep', array('data' => $data, 'data2' => $data2));
        $this->load->view('footer');
	}

}