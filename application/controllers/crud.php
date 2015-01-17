<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function index() {
		$data = $this -> mymodel -> GetMahasiswa();
		$this -> load -> view('tabel', array('data' => $data));
	}

	public function add_data() {
		$this -> load -> view("form_add");
	}

	public function do_insert() {
		$nim = $_POST['nim'];
		$nama = $_POST['alamat'];
		$alamat = $_POST['alamat'];
		$data_insert = array('nim' => $nim, 'nama' => $nama, 'alamat' => $alamat);
		$res = $this -> mymodel -> InsertData('mahasiswa', $data_insert);
		if ($res >= 1) {
			$this->session->set_flashdata('pesan', 'Tambah Data Sukses');
			redirect('crud/index');
		} else {
			echo "<h2>Insert data gagal</h2>";
		}
	}

	public function edit_data($nim) {
		$mhs = $this -> mymodel -> GetMahasiswa("where nim = '$nim'");
		$data = array("nim" => $mhs[0]['nim'], "nama" => $mhs[0]['nama'], "alamat" => $mhs[0]['alamat'], );
		$this -> load -> view("form_edit", $data);
	}

	public function do_update() {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$data_update = array('nama' => $nama, 'alamat' => $alamat);
		$where = array('nim' => $nim);
		$res = $this -> mymodel -> UpdateData('mahasiswa', $data_update, $where);
		if ($res >= 1) {
			$this->session->set_flashdata('pesan', 'Update Data Sukses');
			redirect('crud/index');
		}
	}

	public function do_delete($nim) {
		$where = array('nim' => $nim);
		$res = $this -> mymodel -> DeleteData('mahasiswa', $where);
		if ($res >= 1) {
			$this->session->set_flashdata('pesan', 'Delete Data Sukses');
			redirect('crud/index');
		}
	}


}
