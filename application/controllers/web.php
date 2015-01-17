<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index() {
		$comp = array("footer" => $this -> html_footer(), "header" => $this -> html_header());
		$this -> load -> view('index', $comp);
	}

	public function blog() {
		$data = array("contents" => $this -> mymodel -> GetKonten() -> result_array(), );
		$comp = array("content" => $this -> load -> view("content", $data, true), "sidebar" => $this -> html_sidebar(), "footer" => $this -> html_footer(), "header" => $this -> html_header());
		$this -> load -> view('blog', $comp);
	}

	public function about() {
		$comp = array("footer" => $this -> html_footer(), "header" => $this -> html_header());
		$this -> load -> view('about-us', $comp);
	}

	public function services() {
		$comp = array("footer" => $this -> html_footer(), "header" => $this -> html_header());
		$this -> load -> view('services', $comp);
	}

	public function portfolio() {
		$comp = array("footer" => $this -> html_footer(), "header" => $this -> html_header());
		$this -> load -> view('portfolio', $comp);
	}

	public function contact() {
		$comp = array("footer" => $this -> html_footer(), "header" => $this -> html_header());
		$this -> load -> view('contact-us', $comp);
	}

	public function categori($id) {
		$cek = $this -> mymodel -> GetKategori("where kode_kategori = '$id'");
		if ($cek -> num_rows() > 0) {

			$data = array("contents" => $this -> mymodel -> GetKonten("where kode_kategori = '$id'") -> result_array(), );
			$comp = array("content" => $this -> load -> view("content", $data, true), "sidebar" => $this -> html_sidebar(), "footer" => $this -> html_footer(), "header" => $this -> html_header());
			$this -> load -> view('blog', $comp);

		} else {
			show_404();
		}
	}

	public function html_nav() {
		return $this -> load -> view("nav", array(), true);
	}

	public function html_header() {
		$data = array("nav" => $this -> html_nav(), );
		return $this -> load -> view("header", $data, true);
	}

	public function html_sidebar() {
		$data = array("kategoris" => $this -> mymodel -> GetKategori() -> result_array(), );
		return $this -> load -> view("sidebar", $data, true);
	}

	public function html_footer() {
		$data = array();
		return $this -> load -> view("footer", array(), true);
	}

}
