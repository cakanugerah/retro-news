<?php

function login_check()
{
    $lj = get_instance();

    if (!$lj->session->userdata('email')) {
        $lj->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
        Please Login !</div>');
        redirect('auth');
    } else {

        $role_id = $lj->session->userdata('role_id');
        $menu = $lj->uri->segment(1);

        $queryMenu = $lj->db->get_where('user_menu', ['menu' => $menu])->row_array();

        $menu_id = $queryMenu['id'];

        $userAccess = $lj->db->get_where(
            'user_access_menu',
            [
                'role_id' => $role_id,
                'menu_id' => $menu_id
            ]
        );

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}

function check_access($role_id, $menu_id)
{
    $ca = get_instance();

    $ca->db->where('role_id', $role_id);
    $ca->db->where('menu_id', $menu_id);
    $result = $ca->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return 'checked = "true"';
    }
}

function check_active($is_active, $user_id)
{
    $ca = get_instance();

    $ca->db->where('is_active', $is_active);
    $ca->db->where('id', $user_id);

    $result = $ca->db->get('user');

    if ($result->num_rows() > 0) {
        return 'checked = "true"';
    }
}
