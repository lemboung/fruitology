<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_add extends CI_Controller {

	public function index(){
		$this->load->view('form_gallery_add');
	}

	public function do_insert(){
		$nama_file = $_FILES['pict_gallery']['name'];
		$ukuran_file = $_FILES['pict_gallery']['size'];
		$tipe_file = $_FILES['pict_gallery']['type'];
		$tmp_file = $_FILES['pict_gallery']['tmp_name'];

		$path = FCPATH."/assets/image/galeri/".$nama_file;

		if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
			// Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
			if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
				// Jika ukuran file kurang dari sama dengan 1MB, lakukan :
				// Proses upload
				if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
					// Jika gambar berhasil diupload, Lakukan :
					$img = $nama_file;
				} else {
					// Jika gambar gagal diupload, Lakukan :
					echo "Maaf, Gambar gagal untuk diupload.";
				}
			} else {
				// Jika ukuran file lebih dari 1MB, lakukan :
				echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
			}
		} else {
			// Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
			echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
		}

		$nama_pict = $_POST['nama_pict'];
		$deskripsi = $_POST['deskripsi'];
		$pict_gallery = $img;

		$data_insert = array(
			'nama_pict' => $nama_pict,
			'deskripsi' => $deskripsi,
			'pict_gallery' => $pict_gallery
		);

		$res = $this->model->InsertData('gallery',$data_insert);

		if($res >= 1){
			redirect('gallery_edit');
		}else{
			echo "<h2>Insert Data Gagal</h2>";
		}
	}

}
