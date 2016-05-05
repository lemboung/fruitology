<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bahan_edit extends CI_Controller {

	public function index(){
		$data = $this->model->GetBahan();
		$this->load->view('table_bahan', array('data' => $data));
	}

	public function edit_bahan($id_bahan){
		$mn = $this->model->GetBahan("where id_bahan = '$id_bahan'");
		$data = array(
				'id_bahan' => $mn[0]['id_bahan'],
				'nama_bahan' => $mn[0]['nama_bahan'],
				'deskripsi' => $mn[0]['deskripsi'],
				'gambar_bahan' => $mn[0]['gambar_bahan'],
				'judul_resep' => $mn[0]['judul_resep']
			);
		$data2 = $this->model->GetResep();
		$this->load->view('form_bahan_edit', array('data' => $data,'data2' => $data2));
	}

	public function do_update(){
		$nama_file = $_FILES['gambar_bahan']['name'];
		$ukuran_file = $_FILES['gambar_bahan']['size'];
		$tipe_file = $_FILES['gambar_bahan']['type'];
		$tmp_file = $_FILES['gambar_bahan']['tmp_name'];

		$path = FCPATH."/assets/image/bahan/".$nama_file;

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

		$id_bahan = $_POST['id_bahan'];
		$nama_bahan = $_POST['nama_bahan'];
		$deskripsi = $_POST['deskripsi'];
		// $pict_makanan = $_POST['gambar_bahan'];
		if (isset($img)) {
			$gambar_makanan = $img;
		} else {
			$gambar_makanan = "no image";
		}
		$resep = $_POST['resep'];

		echo "$gambar_makanan";

		if ($gambar_makanan == "no image") {
			$data_update = array(
				//'id_bahan' => $id_bahan,
				'nama_bahan' => $nama_bahan,
				'deskripsi' => $deskripsi,
				'resep' => $resep
			);
			$where = array('id_bahan' => $id_bahan);
			$res = $this->model->UpdateData('bahan',$data_update, $where);
		} elseif ($gambar_makanan != "no image") {
			$data_update = array(
				'id_bahan' => $id_bahan,
				'nama_bahan' => $nama_bahan,
				'deskripsi' => $deskripsi,
				'gambar_bahan' => $gambar_bahan,
				'resep' => $resep
			);
			$where = array('id_bahan' => $id_bahan);
			$res = $this->model->UpdateData('bahan',$data_update, $where);
		}

		if($res >= 1){
			redirect('bahan_edit');
		}else{
			echo "<h2>Update Data Gagal</h2>";
			echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
		}
	}

	public function do_delete($id_bahan){
		$where = array('id_bahan' => $id_bahan);
		$res = $this->model->DeleteData('bahan',$where);

		if($res >= 1){
			redirect('bahan_edit');
		}else{
			echo "<h2>Delete Data Gagal</h2>";
			echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
		}
	}

}
