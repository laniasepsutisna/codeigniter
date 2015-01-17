<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = $this->mymodel->GetMahasiswa();
		$this->load->view('tabel', array('data' => $data));
		
	}
	
	public function insert(){
		$res = $this->mymodel->InsertData('mahasiswa', array(
			"nim" => '121094984',
			"nama" => 'Indah Rasa',
			"alamat" => 'Jakarta'
		));
		
		if($res >= 1){
			echo "<h2>Insert data Sukses</h2>";
		}else{
			echo "<h2>Insert data Gagal</h2>";
		}
	}
	
	public function update(){
	 	$res = $this->mymodel->UpdateData('mahasiswa', array(
			"alamat" => 'Merak, Indonesia'
			), array('nim' => "121094984"));
		
		if($res >= 1){
			echo "<h2>Update data Sukses</h2>";
		}else{
			echo "<h2>Update data Gagal</h2>";
		}
	}
	
	public function delete(){
		$res = $this->mymodel->DeleteData('mahasiswa', array('nim' => "121094984"));
		
		if($res >= 1){
			echo "<h2>Delete data Sukses</h2>";
		}else{
			echo "<h2>Delete data Gagal</h2>";
		}
	}
	
	public function panggil(){
		$data = $this->db->query('select * from mahasiswa')->result();
		/*echo "<pre>";
		print_r($data);
		echo "</pre>"; */
		echo "Jumlah data = ".$data->num_rows();
		foreach($data as $row){
			echo "No Induk : ".$row->nim."<br />";
			echo "Nama : ".$row->nama."<br />";
			echo "ALamat : ".$row->alamat."<hr />";
		}
	}
}
