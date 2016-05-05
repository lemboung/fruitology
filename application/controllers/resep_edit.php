<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resep_edit extends CI_Controller {

	public function index(){
		$data = $this->model->GetResep();
		$this->load->view('table_resep', array('data' => $data));
	}

	public function edit_menu($id_resep){
		$mn = $this->model->GetResep("where id_resep = '$id_resep'");
		$data = array(
				'id_resep' => $mn[0]['id_resep'],
				'judul_resep' => $mn[0]['judul_resep']
			);
		$this->load->view('form_resep_edit', array('data' => $data));
	}

	public function do_update(){
		$id_resep = $_POST['id_resep'];
		$judul_resep = $_POST['judul_resep'];

		$data_update = array(
			'id_resep' => $id_resep,
			'judul_resep' => $judul_resep
		);

		$where = array('id_resep' => $id_resep);
		$res = $this->model->UpdateData('resep',$data_update, $where);


		if($res >= 1){
			redirect('Resep_edit');
		}else{
			echo "<h2>Update Data Gagal</h2>";
			echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
		}
	}

	public function do_delete($id_resep){
		$where = array('id_resep' => $id_resep);
		$res = $this->model->DeleteData('resep',$where);

		if($res >= 1){
			redirect('resep_edit');
		}else{
			echo "<h2>Delete Data Gagal</h2>";
			echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
		}
	}

}
