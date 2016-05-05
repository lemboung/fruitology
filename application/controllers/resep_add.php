<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resep_add extends CI_Controller {

	public function index(){
		$this->load->view('form_Resep_add');
	}

	public function do_insert(){
		$resep = $_POST['resep'];

		$data_insert = array(
			'judul_resep' => $resep
		);

		$res = $this->model->InsertData('resep',$data_insert);

		if($res >= 1){
			redirect('bahan_add');
		}else{
			echo "<h2>Insert Data Gagal</h2>";
		}
	}

}