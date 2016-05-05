<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bahan_add extends CI_Controller {

	public function index(){
		$data = $this->model->GetResep();
		$this->load->view('form_bahan_add', array('data' => $data));
    }

	public function do_insert(){
		$nama_file = $_FILES['gambar_bahan']['name'];
		$ukuran_file = $_FILES['gambar_bahan']['size'];
		$tipe_file = $_FILES['gambar_bahan']['type'];
		$tmp_file = $_FILES['gambar_bahan']['tmp_name'];

		$path = FCPATH."/assets/image/bahan/".$nama_file;

		if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
			if($ukuran_file <= 1000000){
				if(move_uploaded_file($tmp_file, $path)){
					$img = $nama_file;
				} else {
					echo "Maaf, Gambar gagal untuk diupload.";
				}
			} else {
				echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
			}
		} else {
			echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
		}

		$nama_bahan = $_POST['bahan'];
		$deskripsi = $_POST['deskripsi'];
		$gambar_bahan = $img;
		$resep = $_POST['resep'];

		$data_insert = array(
			'nama_bahan' => $nama_bahan,
			'deskripsi' => $deskripsi,
            'resep' => $resep,
			'gambar_bahan' => $gambar_bahan
		);

		$res = $this->model->InsertData('bahan',$data_insert);

		if($res >= 1){
			redirect('bahan_add');
		}else{
			echo "<h2>Insert Data Gagal</h2>";
		}
	}

}
