<?php

class Anggota extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_login','mdata');
        if ($this->session->userdata('ci_level') == 2) {
			redirect('dashboard');
		}
    }

    public function index() {
        if ($this->session->userdata('ci_level') == 1) {
            $id = $this->session->userdata('ci_id');
            $data['totung'] = $this->mdata->total_keuntungan();
            $data['shu'] = $this->mdata->data_simpanan_anggota();
            $data['totpinj'] = $this->mdata->total_pinjaman($id);
            $data['totalsmp'] = $this->mdata->total_simpanan_anggota($id);
			if ($this->session->userdata('ci_nama') != '') {
				$this->load->view('anggota/index', $data);	
			} else {
				redirect('login');
			}
		}
    }
}