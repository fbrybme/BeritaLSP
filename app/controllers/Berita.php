<?php

class Berita extends Controller {
	
	public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
	}
	
	public function index()
	{
		$data['title'] = 'Data Berita';
		$data['berita'] = $this->model('BeritaModel')->getAllBerita();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('berita/index', $data);
		$this->view('templates/footer');
	}
	
	public function cari()
	{
		$data['title'] = 'Data Berita';
		$data['berita'] = $this->model('BeritaModel')->cariBerita();
		$data['key'] = $_POST['key'];
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('berita/index', $data);
		$this->view('templates/footer');
	}

	public function edit($id_berita){

		$data['title'] = 'Detail Berita';
		$data['kategori'] = $this->model('KategoriModel')->getAllKategori();
		$data['berita'] = $this->model('BeritaModel')->getBeritaById($id_berita);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('berita/edit', $data);
		$this->view('templates/footer');
	}

	public function tambah(){
		$data['title'] = 'Tambah Berita';		
		$data['kategori'] = $this->model('KategoriModel')->getAllKategori();		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('berita/create', $data);
		$this->view('templates/footer');
	}

	public function simpanBerita(){
		// $query = $this->model('BeritaModel')->tambahBerita($_POST, $_FILES);

		$fileName       = basename($_FILES["gambar"]["name"]);
		$targetFilePath = 'upload/' . $fileName;

		// SIMPAN TANPA GAMBAR
		if ($_FILES["gambar"]["error"]>0){
			$query = $this->model('BeritaModel')->tambahBerita($_POST, '');
		} else {

			//SIMPAN DENGAN
			//upload file to server
		    if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath)){
		    	$query = $this->model('BeritaModel')->tambahBerita($_POST, $targetFilePath);
		    }

		}

		if( $query > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. base_url . '/berita');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. base_url . '/berita');
			exit;	
		}

		// var_dump($_FILES);
	}

	public function updateBerita(){	

		$fileName       = basename($_FILES["gambar"]["name"]);
		$targetFilePath = 'upload/' . $fileName;

		// SIMPAN TANPA GAMBAR
		if ($_FILES["gambar"]["error"]>0){
			$query = $this->model('BeritaModel')->updateDataBerita($_POST, '');
		} else {

			//SIMPAN DENGAN
			//upload file to server
		    if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath)){
		    	$query = $this->model('BeritaModel')->updateDataBerita($_POST, $targetFilePath);
		    }

		}

		if( $query > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. base_url . '/berita');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. base_url . '/berita');
			exit;	
		}
	}

	public function hapus($id_berita){
		if( $this->model('BeritaModel')->deleteBerita($id_berita) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/berita');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/berita');
			exit;	
		}
	}
}