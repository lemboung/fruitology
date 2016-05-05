<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_edit extends CI_Controller {

	public function index(){
		$data = $this->model->GetGallery();
		$this->load->view('table_gallery', array('data' => $data));
	}

	public function edit_menu($id_gallery){
		$mn = $this->model->GetGallery("where id_gallery = '$id_gallery'");
		$data = array(
				'id_gallery' => $mn[0]['id_gallery'],
				'nama_pict' => $mn[0]['nama_pict'],
				'deskripsi' => $mn[0]['deskripsi'],
				'pict_gallery' => $mn[0]['pict_gallery']
			);
		$this->load->view('form_gallery_edit', array('data' => $data));
	}

	public function do_update(){
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
					// echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
				}
			} else {
				// Jika ukuran file lebih dari 1MB, lakukan :
				echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
				// echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
			}
		}
		// else {
		// 	// Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
		// 	echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
		// 	// echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
		// }

		$id_gallery = $_POST['id_gallery'];
		$nama_pict = $_POST['nama_pict'];
		$deskripsi = $_POST['deskripsi'];
		if (isset($img)) {
			$pict_gallery = $img;
		} else {
			$pict_gallery = "";
		}

		if ($pict_gallery == "") {
			$data_update = array(
				'id_gallery' => $id_gallery,
				'nama_pict' => $nama_pict,
				'deskripsi' => $deskripsi
			);
			$where = array('id_gallery' => $id_gallery);
			$res = $this->model->UpdateData('gallery',$data_update, $where);
		} elseif ($pict_gallery != "") {
			$data_update = array(
				'id_gallery' => $id_gallery,
				'nama_pict' => $nama_pict,
				'deskripsi' => $deskripsi,
				'pict_gallery' => $pict_gallery
			);
			$where = array('id_gallery' => $id_gallery);
			$res = $this->model->UpdateData('gallery',$data_update, $where);
		}

		if($res >= 1){
			redirect('gallery_edit');
		}else{
			echo "<h2>Update Data Gagal</h2>";
			echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
		}
	}

	public function do_delete($id_gallery){
		$where = array('id_gallery' => $id_gallery);
		$res = $this->model->DeleteData('gallery',$where);

		if($res >= 1){
			redirect('gallery_edit');
		}else{
			echo "<h2>Delete Data Gagal</h2>";
			echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
		}
	}

}
