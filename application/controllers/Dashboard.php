<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct() {
		parent::__construct();	
		$this->load->library('session');
		$this->load->model('m_login','mdata');
	}

	public function index() {
		$data['totalagt'] = $this->mdata->total_anggota();
		$data['totalsmp'] = $this->mdata->total_simpanan();
		if ($this->session->userdata('ci_nama') != '') {
			$this->load->view('admin/index', $data);	
		} else {
			redirect('login');
		}
		
	}

	public function id_anggota() {
		echo($this->mdata->id_anggota());
	}

	public function data_anggota() {
		$data['anggota'] = $this->mdata->tampil_data_anggota();
		$this->load->view('admin/anggota/data',$data);
	}

	public function hapus_anggota($id) {
		if ($this->mdata->hapus_anggota($id) == true ) {
			$this->session->set_flashdata('message', 'berhasil');
			redirect('dashboard/data_anggota');
		} else {
			$this->session->set_flashdata('message', 'gagal');
			redirect('dashboard/data_anggota');
		}
	}

	public function form_anggota() {
		$this->load->view('admin/anggota/tambah');
	}

	public function tambah_anggota() {
		$id = $this->mdata->id_anggota();
		$data = array(
				'id_anggota' => $id,
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_telpon' => $this->input->post('no_telpon'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'tanggal_gabung' => date('y-m-d'),
				'level' => $this->input->post('level'),
				'status' => 0,
			);
		if ($this->mdata->tambah_anggota($data) == true) {
			$this->session->set_flashdata('message', 'berhasil');
			redirect('dashboard/form_anggota');
		} else {
			$this->session->set_flashdata('message', 'gagal');
			redirect('dashboard/form_anggota');
		}
	}

	public function edit_anggota($id) {
		$data = $this->mdata->show_edit_anggota($id);
		echo json_encode($data);
	}

	public function data_simpanan() {
		$data['simpanan'] = $this->mdata->tampil_data_simpanan();
		$this->load->view('admin/simpanan/data',$data);
	}

	public function form_simpanan() {
		$this->load->view('admin/simpanan/tambah');
	}

	public function tambah_simpanan() {
		$nama = $this->input->post('nama');
		if ($id = $this->mdata->cek_id_anggota($nama) ) {
			$data = array(
				'id_anggota' => $id,
				'tanggal' => date('y-m-d'),
				'jumlah' => $this->input->post('jumlah')
			);
			if ($this->mdata->tambah_simpanan($data) == true) {
				$this->session->set_flashdata('message', 'berhasil');
				redirect('dashboard/form_simpanan');
			} else {
				$this->session->set_flashdata('message', 'berhasil');
				redirect('dashboard/form_simpanan');
			}
		}
	}

	public function data_pinjaman() {
		$data['pinjaman'] = $this->mdata->tampil_data_pinjaman();
		$this->load->view('admin/pinjaman/data',$data);
	}

	public function tambah_pinjaman() {
		$nama = $this->input->post('nama');
		if ($id = $this->mdata->cek_id_anggota($nama) ) {
			$data = array(
				'id_anggota' => $id,
				'tanggal' => date('y-m-d'),
				'jumlah' => $this->input->post('jumlah'),
				'jenis' => $this->input->post('jenis')
			);
			if ($this->mdata->tambah_pinjaman($data) == true) {
				$this->session->set_flashdata('message', 'berhasil');
				redirect('dashboard/form_pinjaman');
			} else {
				$this->session->set_flashdata('message', 'berhasil');
				redirect('dashboard/form_pinjaman');
			}
		}
	}

	public function form_pinjaman() {
		$this->load->view('admin/pinjaman/tambah');
	}

	public function data_shu() {
		$data['shu'] = $this->mdata->tampil_data_shu();
		$this->load0>view('admin/shu/data',$data);
	}

	
}