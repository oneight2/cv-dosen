<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }


    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('user');
        }
    }


    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }
    public function dataInstansi()
    {
        $data['title'] = 'Data Instasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nidn'] = $this->db->get_where('user', ['nidn' => $this->session->userdata('nidn')])->row_array();

        $data['dosen'] = $this->db->get_where('dosen', ['nidn' => $this->session->userdata('nidn')])->row_array();

        $this->form_validation->set_rules('jabatan_fungsional', 'Jabatan fungsional', 'required');
        $this->form_validation->set_rules('ikatan_kerja', 'Ikatan kerja', 'required');
        $this->form_validation->set_rules('aktivitas', 'Aktivitas', 'required');
        // $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/datainstansi', $data);
            $this->load->view('templates/footer');

        } else {
            $jabatan_fungsional = $this->input->post('jabatan_fungsional');
            $ikatan_kerja = $this->input->post('ikatan_kerja');
            $aktivitas = $this->input->post('aktivitas');
            $deskripsi = $this->input->post('deskripsi');
           
            $this->db->set('jabatan_fungsional', $jabatan_fungsional);
            $this->db->set('status_ikatan_kerja', $ikatan_kerja);
            $this->db->set('status_aktivitas', $aktivitas);
            $this->db->set('deskripsi', $deskripsi);
            $this->db->where('nidn', $this->session->userdata('nidn'));
            $this->db->update('dosen');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
            redirect('user/datainstansi');
        }
    }

    public function dataPersonal()
    {
        $data['title'] = 'Data Personal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $data['nidn'] = $this->db->get_where('user', ['nidn' => $this->session->userdata('nidn')])->row_array();

        $data['personal'] = $this->db->get_where('data_personal', ['nidn' => $this->session->userdata('nidn')])->row_array();

        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('tinggi_badan', 'Tinggi Badan', 'trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/dataPersonal', $data);
            $this->load->view('templates/footer');

        } else {
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $agama = $this->input->post('agama');
            $tinggi_badan = $this->input->post('tinggi_badan');
            $berat_badan = $this->input->post('berat_badan');
            $alamat = $this->input->post('alamat');
            $nomor_telp = $this->input->post('nomor_telp');
           
            $this->db->set('tanggal_lahir', $tanggal_lahir);
            $this->db->set('jenis_kelamin', $jenis_kelamin);
            $this->db->set('agama', $agama);
            $this->db->set('tinggi_badan', $tinggi_badan);
            $this->db->set('berat_badan', $berat_badan);
            $this->db->set('alamat', $alamat);
            $this->db->set('nomor_telp', $nomor_telp);
            $this->db->where('nidn', $this->session->userdata('nidn'));
            $this->db->update('data_personal');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
            redirect('user/datapersonal');
        }
    
    }

    public function dataPendidikan(){
        $data['title'] = 'Data Riwayat Pendidikan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $data['nidn'] = $this->db->get_where('user', ['nidn' => $this->session->userdata('nidn')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/dataPendidikan', $data);
            $this->load->view('templates/footer');
    }

    public function dataPenelitian(){
        $data['title'] = 'Data Riwayat Pendidikan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $data['nidn'] = $this->db->get_where('user', ['nidn' => $this->session->userdata('nidn')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/dataPenelitian', $data);
            $this->load->view('templates/footer');
    }
    public function dataPengabdian(){
        $data['title'] = 'Data Riwayat Pengabdian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $data['nidn'] = $this->db->get_where('user', ['nidn' => $this->session->userdata('nidn')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/dataPengabdian', $data);
            $this->load->view('templates/footer');
    }
     public function dataMengajar(){
        $data['title'] = 'Data Riwayat Mengajar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $data['nidn'] = $this->db->get_where('user', ['nidn' => $this->session->userdata('nidn')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/dataMengajar', $data);
            $this->load->view('templates/footer');
    }
     public function dataPenunjang(){
        $data['title'] = 'Data Penunjang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $data['nidn'] = $this->db->get_where('user', ['nidn' => $this->session->userdata('nidn')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/dataPenunjang', $data);
            $this->load->view('templates/footer');
    }
}
