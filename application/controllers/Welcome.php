<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data['title'] = 'Pencarian';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('welcome/index');
		 $this->load->view('templates/auth_footer');
	}
	public function cekData()
    {
        $nidn = $this->input->post('nidn');
        echo json_encode($this->db->get_where('user', ['nidn' => $nidn] )->row_array());
    }
}
