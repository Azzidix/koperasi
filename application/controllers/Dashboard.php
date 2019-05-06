<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();	
		$this->load->library('session');
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
		$this->load->view('admin/pages/data-anggota');
	}

	public function tambah_anggota()
	{
		$this->load->view('admin/pages/tambah-anggota');	
	}

	public function data_simpanan()
	{
		$this->load->view('admin/pages/data-simpanan');
	}

	public function tambah_simpanan()
	{
		$this->load->view('admin/pages/tambah-simpanan');
	}

	public function data_pinjaman()
	{
		$this->load->view('admin/pages/data-pinjaman');
	}

	public function tambah_pinjaman()
	{
		$this->load->view('admin/pages/tambah-pinjaman');
	}
}