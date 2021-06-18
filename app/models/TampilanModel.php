<?php

class TampilanModel {
	
	private $table = 'berita';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllBerita()
	{
		$this->db->query("SELECT * FROM " . $this->table);
		return $this->db->resultSet();
	}
}