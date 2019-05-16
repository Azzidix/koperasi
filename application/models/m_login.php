<?php

class m_login extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function login_validasi($data) {
		$this->db->where('username', $data['user']);
		$this->db->where('password', $data['pass']);

		$sql = $this->db->get('anggota');

		if ($this->db->affected_rows() == 1) {
			return $sql->result();
		} else {
			return false;
		}
	}

	public function id_anggota() {
		$sql = $this->db->query('SELECT MAX(RIGHT(id_anggota,4)) as id FROM anggota');
		$idk = '';
		if ($sql->num_rows() > 0) {
			foreach ($sql->result() as $d) {
				$tmp = ((int)$d->id)+1;
				$idk = sprintf("%04s", $tmp);
			}
		} else {
			$idk = "0001";
		}
		date_default_timezone_set('Asia/Jakarta');
		return date('dmy').$idk;
	}

	public function cek_id_anggota($nama) {
		$this->db->where('nama', $nama);
		$sql = $this->db->get('anggota');
		if ($this->db->affected_rows() > 0) {
			foreach ($sql->result() as $key) {
				return $key->id_anggota;
			}
		} else {
			return false;
		}
	}

	public function show_edit_anggota($id) {
		$this->db->where('id', $id);
		$sql = $this->db->get('anggota');
		if($this->db->affected_rows() > 0) {
			return $sql->result();
		} else {
			return false;
		}
	}

	public function update_anggota($data,$id) {
		$this->db->where('id', $id);
		$sql = $this->db->update('anggota', $data);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function tampil_data_anggota() {
		$this->db->order_by('LOWER(level)','desc');
		$sql = $this->db->get('anggota');

		if ($this->db->affected_rows() > 0) {
			return $sql->result();
		} else {
			return false;
		}
	}

	public function tambah_anggota($data) {
		$sql = $this->db->insert('anggota', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function hapus_anggota($id) {
		$this->db->where('id', $id);
		$sql = $this->db->delete('anggota');
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function tampil_data_simpanan() {
		$this->db->select('a.nama, s.jumlah, s.status, s.tanggal');
		$this->db->from('simpanan as s');
		$this->db->join('anggota as a','a.id_anggota = s.id_anggota');
		$sql = $this->db->get();

		if ($this->db->affected_rows() > 0) {
			return $sql->result();
		} else {
			return false;
		}
	}
	public function tambah_simpanan($data) {
		$sql = $this->db->insert('simpanan', $data);
		if ($sql) {
			return true;
		} else {
			return false;
		}
	}

	public function tampil_data_pinjaman() {
		$this->db->select('a.nama, p.jumlah, p.status, p.tanggal');
		$this->db->from('pinjaman as p');
		$this->db->join('anggota as a','a.id_anggota = p.id_anggota');
		$sql = $this->db->get();

		if ($this->db->affected_rows() > 0) {
			# code...
			return $sql->result();
		} else {
			return false;
		}
	}

	public function tambah_pinjaman($data) {
		$sql = $this->db->insert('pinjaman', $data);
		if ($sql) {
			return true;
		} else {
			return false;
		}
	}

	public function tampil_data_shu() {
		$sql = $this->db->get('shu');

		if ($this->db->affected_rows() > 0) {
			return $sql->result();
		} else {
			return false;
		}
	}

	public function cek_aktivasi($data) {
		$this->db->where('nama', $data);
		$sql = $this->db->get('anggota');
		if ($this->db->affected_rows() > 0) {
			foreach($data = $sql->result() as $row) {
				if ($row->status == 0) {
					return 1;
				} elseif ($row->status == 1){
					return 2;
				}
			}
		} else {
			return 3;
		}
	}

	public function aktivasi($data,$id) {
		$this->db->where('nama', $id);
		$this->db->update('anggota',$data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function search_user($nama) {
		$this->db->like('nama', $nama, 'both');
		$this->db->order_by('nama','ASC');
		$this->db->limit(10);
		$sql = $this->db->get('anggota')->result();
		if ($sql) {
			return $sql;
		} else {
			return $sql;
		}
	}

	public function total_anggota() {
		
		$sql = $this->db->get('anggota');
		if ($sql) {
			return $sql->num_rows();
		}
	}

	public function total_simpanan() {
		
		$sql = $this->db->query('SELECT sum(jumlah) as jml FROM simpanan');
		if ($sql) {
			return $sql->result();
		}
	}

	public function total_pinjaman() {
		
		$sql = $this->db->get('anggota');
		if ($sql) {
			return $sql->num_rows();
		}
	}
}