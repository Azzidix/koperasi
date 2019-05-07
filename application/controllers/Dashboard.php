<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();	
		$this->load->library('session');
		$this->load->model('m_login','mdata');
	}

	public function index()
	{
		if ($this->session->userdata('ci_nama') != '') {
			$this->load->view('admin/index');	
		} else {
			redirect('login');
		}
		
	}

	public function data_anggota()
	{
		$data['anggota'] = $this->mdata->tampil_data_anggota();
		$this->load->view('admin/pages/data-anggota',$data);
		return $data;
	}

	public function tambah_anggota()
	{
		$this->load->view('admin/pages/tambah-anggota');
		$tambah = $this->input->post('simpan');
		if (isset($tambah))	
		{
			$data = array(
					'nama' => $this->input->post('nama'),
					'alamat' => $this->input->post('alamat'),
					'no_telpon' => $this->input->post('no_telpon'),
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'tanggal_lahir' => $this->input->post('tanggal_lahir'),
					'tanggal_gabung' => date('y/m/d'),
					'level' => $this->input->post('level'),
					'status' => 0,
				);
			if ($this->mdata->tambah_anggota($data) == true) {
				return $this->session->set_flashdata('message', 'berhasil');
			} else {
				return $this->session->set_flashdata('message', 'gagal');
			}
		}
	}

	public function data_simpanan()
	{
		$data['simpanan'] = $this->mdata->tampil_data_simpanan();
		$this->load->view('admin/pages/data-simpanan',$data);
	}

	public function tambah_simpanan()
	{
		$this->load->view('admin/pages/tambah-simpanan');
	}

	public function data_pinjaman()
	{
		$data['pinjaman'] = $this->mdata->tampil_data_pinjaman();
		$this->load->view('admin/pages/data-pinjaman',$data);
	}

	public function tambah_pinjaman()
	{
		$this->load->view('admin/pages/tambah-pinjaman');
	}
}