<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Dosen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nidn', 'Nidn', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dosen', $data);
        $this->load->view('templates/footer');
    	}else{
    		$data = [
                'nidn' => $this->input->post('nidn'),
                'nama' => $this->input->post('nama'),
                'perguruan_tinggi' => 'STT-Garut',
                'program_studi' => $this->input->post('prodi'),
                'jabatan_fungsional' => $this->input->post('jabatan'),
            ];
    		$this->db->insert('dosen', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('dosen');
    	}
	}
}
