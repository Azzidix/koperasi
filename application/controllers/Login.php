<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_login','data');
	}
	public function index()
	{
		if ($this->session->userdata('ci_nama') != '') {
			redirect('dashboard');
		} else {
			$this->load->view('v_login');	
		}
	}

	public function cek_login()
	{
		$data = array(
			'user' => $this->input->post('username'),
			'pass' => $this->input->post('password')
		);
		
		if ($sql = $this->data->login_validasi($data)) {
			foreach ($sql as $key) {
				# code...
				$session = array(
						'ci_nama' => $key->nama,
						'ci_level' => $key->level
					);
				$this->session->set_userdata($session);
			}
			redirect('dashboard');
		} else {
			# code...
			$this->session->set_flashdata('login_message', 'gagal');
			redirect('login');
		}
	}

	public function signup()
	{
		$this->load->view('v_signup');
	}
	public function logout()
	{
		if ($this->session->sess_destroy(array('ci_nama','ci_level')));
		$this->session->set_flashdata('logout_message', 'berhasil');
		redirect('login');
	}
}
