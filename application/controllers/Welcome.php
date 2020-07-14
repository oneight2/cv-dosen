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
   function fetch(){
    	$this->load->model('Autocomplete_model');
    	echo $this->Autocomplete_model->fetch_data($this->uri->segment(3));
    }

    public function Curriculumvitae()
    {
    	$data['title'] = 'Curriculum Vitae';
		$nidn = $this->input->post_get('nidn', TRUE);
		$this->load->model('CV_model','dosen');
		$data['dosen'] = $this->dosen->getDosen();
		$this->load->view('templates/cv_header', $data);
		$this->load->view('welcome/cv');
		$this->load->view('templates/cv_footer');

    }
}
 