<?php

class Tampilan extends Controller
{
	public function index()
	{
		$data['title'] = 'Halaman Berita';

		$data['berita'] = $this->model('BeritaModel')->getAllBerita();
		$this->view('template/header', $data);
		$this->view('template/sidebar', $data);
		$this->view('tampilan/index', $data);
		$this->view('template/footer');
	}
}
