<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model extends CI_Model {

	// public function GetMenu($where = ""){
	// 	$data = $this->db->query('select * from menu '.$where);
	// 	return $data->result_array();
	// }

	// public function GetKategoriMenu($where = ""){
	// 	$data = $this->db->query('select distinct kategori_makanan from menu '.$where);
	// 	return $data->result_array();
	// }

	// public function GetPaket($where = ""){
	// 	$data = $this->db->query('select * from paket '.$where);
	// 	return $data->result_array();
	// }

	// public function GetPictPaket($where = ""){
	// 	$data = $this->db->query('select pic.id_pict_paket, pic.id_paket, pic.pict_paket, p.kategori_paket
	// 							from pict_paket pic join paket p
	// 							on pic.id_paket = p.id_paket '.$where);
	// 	return $data->result_array();
	// }

	// public function GetKategoriPaket($where = ""){
	// 	$data = $this->db->query('select distinct kategori_paket from paket '.$where);
	// 	return $data->result_array();
	// }

	// public function GetNamaPaket($where = ""){
	// 	$data = $this->db->query('select distinct id_paket, nama_paket from paket '.$where);
	// 	return $data->result_array();
	// }

	public function GetBahan($where = ""){
		$data = $this->db->query('select b.id_bahan, b.nama_bahan, b.deskripsi, b.resep, r.judul_resep, b.gambar_bahan
								from bahan b join resep r
								on b.resep = r.id_resep '.$where);
		return $data->result_array();
	}

	public function GetResep($where = ""){
		$data = $this->db->query('select * from Resep '.$where);
		return $data->result_array();
	}


	public function GetMember($where = ""){
		$data = $this->db->query('select * from member '.$where);
		return $data->result_array();
	}

	public function GetGallery($where = ""){
		$data = $this->db->query('select * from gallery '.$where);
		return $data->result_array();
	}

	public function InsertData($tableName, $data){
		$res = $this->db->insert($tableName, $data);
		return $res;
	}

	public function UpdateData($tableName, $data, $where){
		$res = $this->db->update($tableName, $data, $where);
		return $res;
	}

	public function DeleteData($tableName, $where){
		$res = $this->db->delete($tableName, $where);
		return $res;
	}
}
