<?php

class UserModel
{

	private $table = 'user';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllUser()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getUserById($id_user)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id_user');
		$this->db->bind('id_user', $id_user);
		return $this->db->single();
	}

	public function tambahUser($data)
	{
		try {
			$query = "START TRANSACTION;";
			$this->db->query($query);
			$query1 = "INSERT INTO user VALUES(:id_user, :nama,:username,:password); COMMIT;";
			$this->db->query($query1);
			$this->db->bind('id_user', $data['id_user']);
			$this->db->bind('nama', $data['nama']);
			$this->db->bind('username', $data['username']);
			$this->db->bind('password', $data['password']);
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

	public function cekUsername()
	{
		$username = $_POST['username'];
		$this->db->query("SELECT * FROM user WHERE username = :username");
		$this->db->bind('username', $username);
		return $this->db->single();
	}

	public function updateDataUser($data)
	{
		if (empty($_POST['password'])) {
			$query = "UPDATE user SET nama=:nama, username=:username WHERE id_user=:id_user";
			$this->db->query($query);
			$this->db->bind('id_user', $data['id_user']);
			$this->db->bind('nama', $data['nama']);
			$this->db->bind('username', $data['username']);
		} else {
			$query = "UPDATE user SET nama=:nama, username=:username, password=:password WHERE id_user=:id_user";
			$this->db->query($query);
			$this->db->bind('id_user', $data['id_user']);
			$this->db->bind('nama', $data['nama']);
			$this->db->bind('username', $data['username']);
			$this->db->bind('password', $data['password']);
		}

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteUser($id_user)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_user=:id_user');
		$this->db->bind('id_user', $id_user);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariUser()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM " . $this->table . " WHERE id_user LIKE :key or nama LIKE :key or username LIKE :key");
		$this->db->bind('key', "%$key%");
		return $this->db->resultSet();
	}
}
