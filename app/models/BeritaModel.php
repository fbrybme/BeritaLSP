<?php

class BeritaModel
{

	private $table = 'berita';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllBerita()
	{
		$this->db->query("SELECT * FROM " . $this->table . ' ORDER BY tanggal DESC ');
		return $this->db->resultSet();
	}

	public function getBeritaById($id_berita)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_berita=:id_berita');
		$this->db->bind('id_berita', $id_berita);
		return $this->db->single();
	}

	public function tambahBerita($data, $filename)
	{
		try {
			$query = "START TRANSACTION;";
			$this->db->query($query);
			$query1 = "INSERT INTO berita VALUES(:id_berita, :id_kategori, :judul, :isi_berita, :tanggal, :gambar); COMMIT;";
			$this->db->query($query1);
			$this->db->bind('id_berita', $data['id_berita']);
			$this->db->bind('id_kategori', $data['id_kategori']);
			$this->db->bind('judul', $data['judul']);
			$this->db->bind('isi_berita', $data['isi_berita']);
			$this->db->bind('tanggal', $data['tanggal']);
			$this->db->bind('gambar', $filename);
			$this->db->execute();
		} catch (PDOException $e) {
			$query = "START TRANSACTION;";
			$this->db->query($query);
			$query1 = "ROLLBACK;";
			$this->db->query($query1);
			$e->getMessage();
		}
		return $this->db->rowCount();
	}

	public function updateDataBerita($data, $filename)
	{
		if ($filename != '') {
			$query = "UPDATE berita SET id_kategori=:id_kategori, judul=:judul, isi_berita=:isi_berita, tanggal=:tanggal, gambar=:gambar WHERE id_berita=:id_berita";
			$this->db->query($query);
			$this->db->bind('id_berita', $data['id_berita']);
			$this->db->bind('id_kategori', $data['id_kategori']);
			$this->db->bind('judul', $data['judul']);
			$this->db->bind('isi_berita', $data['isi_berita']);
			$this->db->bind('tanggal', $data['tanggal']);
			$this->db->bind('gambar', $filename);

			$this->db->execute();
		} else {
			$query = "UPDATE berita SET id_kategori=:id_kategori, judul=:judul, isi_berita=:isi_berita, tanggal=:tanggal WHERE id_berita=:id_berita";
			$this->db->query($query);
			$this->db->bind('id_berita', $data['id_berita']);
			$this->db->bind('id_kategori', $data['id_kategori']);
			$this->db->bind('judul', $data['judul']);
			$this->db->bind('isi_berita', $data['isi_berita']);
			$this->db->bind('tanggal', $data['tanggal']);

			$this->db->execute();
		}

		return $this->db->rowCount();
	}

	public function deleteBerita($id_berita)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_berita=:id_berita');
		$this->db->bind('id_berita', $id_berita);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariBerita()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM " . $this->table . " WHERE id_berita LIKE :key or id_kategori LIKE :key or judul LIKE :key or tanggal LIKE :key");
		$this->db->bind('key', "%$key%");
		return $this->db->resultSet();
	}
}
