<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_login');
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
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		
		if ($sql = $this->m_login->login_validasi($data)) {
			foreach ($sql as $key) {
				# code...
				$session = [
						'ci_nama' => $key->nama,
						'ci_level' => $key->level
					];
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
