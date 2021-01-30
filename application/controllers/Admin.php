<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()

    {
        parent::__construct();
        login_check();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('News_model', 'news');
        $data['news'] = $this->news->getAllNews();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }


    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New role has been added!</div>');
            redirect('admin/role');
        }
    }

    public function roleaccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id!=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    // public function activeChange()
    // {
    //     $menu_id = $this->input->post('menuId');
    //     $role_id = $this->input->post('roleId');


    //     $data = [
    //         'role_id' => $role_id,
    //         'menu_id' => $menu_id
    //     ];

    //     $result = $this->db->get_where('user_access_menu', $data);
    //     if ($result->num_rows() < 1) {
    //         $this->db->insert('user_access_menu', $data);
    //     } else {
    //         $this->db->delete('user_access_menu', $data);
    //     }
    //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    //     Access succesfully changed !</div>');
    // }

    public function accessChange()
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
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Access succesfully changed !</div>');
    }

    public function listUser()
    {

        $data['title'] = 'User List';
        $this->load->model('User_model', 'listuser');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['list'] = $this->listuser->getUser();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/user-list', $data);
        $this->load->view('templates/footer');
    }

    public function deleteUser($id)
    {
        $image = $this->db->get_where('user', ['id' => $id])->row_array();

        if ($image['image'] != 'default.jpg') {
            unlink(FCPATH . '/assets/image/profile/' . $image['image']);
        } else {
            echo 'Image Not Found';
        }
        $data = [['id'] => $image['id']];
        $this->User_model->deleteUser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            User  has been deleted!</div>');
        redirect('admin/listuser');
    }


    public function config()
    {

        $data['title'] = 'Website Configuration';
        $this->load->model('User_model', 'listuser');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['list'] = $this->listuser->getUser();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/config', $data);
        $this->load->view('templates/footer');
    }
}
