<?php

class Crud
{
	private $db;

	public function __construct($con)
	{
		$this->db = $con;
	}

	public function show_anggota()
	{
		try 
		{
			$sql = $this->db->prepare("SELECT * FROM anggota");
			$sql->execute();

			$data = $sql->fetchAll(PDO::FETCH_ASSOC);
			return $data;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}
	}

	public function login($user,$pass)
	{
		try 
		{
			$sql = $this->db->prepare("SELECT * FROM anggota WHERE username = :user AND password = :pass");
			$sql->bindparam(":user", $user);
			$sql->bindparam(":pass", $pass);
			$sql->execute();
			if ($sql->rowCount() > 0)
			{
				session_start();
				
				$row = $sql->fetch(PDO::FETCH_ASSOC);
				if ($row->level == 1)
				{
					$data = array(
						'nama' => $row,
						'level' => 1
						);
					$message = "Login Berhasil";
					return $message;
				}
				else 
				{
					$data = array(
						'nama' => $row,
						'level' => 0
						);
					$message = "Login Berhasil";
					return $message;
				}
			}
			else {
				$message = "Login Gagal";
				return $message;
			}
			return true;
		} 
		catch (PDOException $e)
		{
			echo $e->getMeessage();
			return false;
		}
	}

	public function logout()
	{
		session_destroy();
		$message = "Logout Berhasil";
		return $message;
	}
}