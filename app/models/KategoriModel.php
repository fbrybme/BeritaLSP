<?php

class KategoriModel
{

	private $table = 'kategori';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllKategori()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getKategoriById($id_kategori)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_kategori=:id_kategori');
		$this->db->bind('id_kategori', $id_kategori);
		return $this->db->single();
	}

	public function tambahKategori($data)
	{
		try {
			$query = "START TRANSACTION;";
			$this->db->query($query);
			$query1 = "INSERT INTO kategori VALUES(:id_kategori, :nama_kategori); COMMIT;";
			$this->db->query($query1);
			$this->db->bind('id_kategori', $data['id_kategori']);
			$this->db->bind('nama_kategori', $data['nama_kategori']);
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

	public function updateDataKategori($data)
	{
		$query = "UPDATE kategori SET nama_kategori=:nama_kategori WHERE id_kategori=:id_kategori";
		$this->db->query($query);
		$this->db->bind('id_kategori', $data['id_kategori']);
		$this->db->bind('nama_kategori', $data['nama_kategori']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteKategori($id_kategori)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_kategori=:id_kategori');
		$this->db->bind('id_kategori', $id_kategori);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariKategori()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM " . $this->table . " WHERE id_kategori LIKE :key or nama_kategori LIKE :key");
		$this->db->bind('key', "%$key%");
		return $this->db->resultSet();
	}
}
