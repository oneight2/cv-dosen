<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }


    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }


    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }

    public function akun()
    {
        $data['title'] = 'Pengelolaan Akun';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Akun_model', 'akun');
        $data['akun'] = $this->akun->getAkun();
        $data['role'] = $this->db->get('user_role')->result_array();
        

        $this->form_validation->set_rules('nidn', 'Nidn','required|trim|is_unique[user.nidn]', [
            'is_unique' => 'NIDN sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required');
        $this->form_validation->set_rules('program_studi', 'Program_studi', 'required');

        if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/akun', $data);
        $this->load->view('templates/footer');
        }else{
            $password = "sttgarut";
            $data = [
                'nidn' => $this->input->post('nidn'),
                'name' => htmlspecialchars($this->input->post('nama', true)),
                'image' => 'default.jpg',
                'password' => 'sttgarut',
                'email' => htmlspecialchars($this->input->post('email', true)),
                'role_id' => $this->input->post('role'),
                'is_active' => '1',
                'date_created' =>time()
            ];
            $dataDosen = [
                'nidn' => $this->input->post('nidn'),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'program_studi' => $this->input->post('program_studi'),
                'perguruan_tinggi' => 'STT-Garut'
            ];
            $this->db->insert('user', $data);
            $this->db->insert('dosen', $dataDosen);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil dibuat!<br>segera lengkapi data yang diperlukan</div>');
            
            redirect('admin/akun');
        }
    }

    public function datadosen()
    {
        $data['title'] = 'Data Dosen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['dosen'] = $this->db->get('dosen')->result_array();
        if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dosen', $data);
        $this->load->view('templates/footer');
        }
    }
    public function informasi()
    {
        $data['title'] = 'Informasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['informasi'] = $this->db->get('informasi')->result_array();

        $this->form_validation->set_rules('informasi', 'informasi', '');

        if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/informasi', $data);
        $this->load->view('templates/footer');
        }else{
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
            $data = [
                'informasi' => $this->input->post('informasi'),
            ];
            $this->db->insert('informasi', $data);
            redirect('admin/informasi');
        }
    }
    public function cekNIDN()
    {
        $nidn = $this->input->post('nidn');
        echo json_encode($this->db->get_where('user', ['nidn' => $nidn])->row_array());
    }


}
