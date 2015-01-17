<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model {

	public function GetMahasiswa($where=""){
		$data = $this->db->query('select * from mahasiswa '.$where);
		return $data->result_array();
	}
	
	public function GetKategori($where=""){
		$data = $this->db->query('select * from kategori '.$where);
		return $data;
	}
	
	public function GetKonten($where=""){
		$data = $this->db->query('select * from konten '.$where);
		return $data;
	}
	
	public function InsertData($tabelName, $data){
		$res = $this->db->insert($tabelName, $data);
		return $res;
	}
	
	public function UpdateData($tabelName, $data, $where){
		$res = $this->db->update($tabelName, $data, $where);
		return $res;
	}
	
	public function DeleteData($tabelName, $where){
		$res = $this->db->delete($tabelName, $where);
		return $res;
	}
}
