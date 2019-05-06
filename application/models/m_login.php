<?php

class m_login extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function login_validasi($data)
	{
		$this->db->where('username', $data['username']);
		$this->db->where('password', $data['password']);

		$sql = $this->db->get('anggota');

		if ($this->db->affected_rows() == 1) {
			# code...
			return $sql->result();
		}
	}
}