<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_login','data');
	}
	
	public function index() {
		if ($this->session->userdata('ci_nama') != '') {
			redirect('dashboard');
		} else {
			$this->load->view('v_login');	
		}
	}
	// Function Pengecekan Login Akun
	public function cek_login() {
		$data = array(
			'user' => $this->input->post('username'),
			'pass' => $this->input->post('password')
		);
		
		if ($sql = $this->data->login_validasi($data)) {
			foreach ($sql as $key) {
				$session = array(
						'ci_nama' => $key->nama,
						'ci_level' => $key->level
					);
				$this->session->set_userdata($session);
			}
			redirect('dashboard');
		} else {
			$this->session->set_flashdata('message', 'gagal');
			redirect('login');
		}
	}

	public function signup() {
		$this->load->view('v_signup');
	}

	public function logout() {
		$this->session->set_flashdata('message', 'berhasil');
		if ($this->session->sess_destroy(array('ci_nama','ci_level')));
		redirect('login');
	}

	public function aktivasi() {
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'status' => 1
		);
		if ($this->data->cek_aktivasi($data['nama']) == 1) {
			if($this->data->aktivasi($data,$data['nama']) == true) {
				$this->session->set_flashdata('message', 'berhasil');
				redirect('login/signup');
			} else {
				$this->session->set_flashdata('message', 'gagal');
				redirect('login/signup');
			}
			
		} elseif ($this->data->cek_aktivasi($data['nama']) == 2) {
			$this->session->set_flashdata('message', 'aktif');
			redirect('login/signup');
		} else{
			$this->session->set_flashdata('message', 'none');
			redirect('login/signup');
		}
	}

	public function get_user_autocomplete()  {
		if (isset($_GET['term'])) {
			$result = $this->data->search_user($_GET['term']);
			if (count($result) > 0) {
				foreach ($result as $row) {
					$arr_result[] = $row->nama;
					echo json_encode($arr_result);
				}
			}
		}
	}
}
