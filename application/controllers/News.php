<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function __construct()

    {
        parent::__construct();
        login_check();
        $this->load->model('Category_model');
        $this->load->model('News_model', 'news');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['title'] = 'Create News';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['category'] = $this->Category_model->getCategory();



        $this->form_validation->set_rules('keywords', 'Keywords', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/article', $data);
            $this->load->view('templates/footer');
        } else {

            // Original News Image
            {
                $config['upload_path']      = './assets/uploads/images/';
                $config['allowed_types']    = 'gif|jpg|jpeg|png';
                $config['max_size']         = '4096';
                $config['max_width']        = 1920;
                $config['max_height']       = 1080;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {

                    echo $this->upload->display_errors();
                } else {


                    $up_data = array('upload' => $this->upload->data());
                    // End Proses Original News Image

                    // Start Thumbs
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './assets/uploads/images/' . $up_data['upload']['file_name'];
                    $config['new_image']        = './assets/uploads/images/thumbs/' . $up_data['upload']['file_name'];
                    $config['create_thumb']     = TRUE;
                    $config['quality']          = "100%";
                    $config['maintain_ratio']   = TRUE;
                    $config['width']            = 200;
                    $config['height']           = 200;
                    $config['thumb_marker']     = "";
                    $config['x_axis']           = 100;
                    $config['y_axis']           = 40;
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    // End thumbs

                    // Insert data
                    $slug = url_title($this->input->post('title'), 'dash', TRUE);
                    $data = array(
                        'id_user'            => $this->input->post('user_id'),
                        'id_cat'             => $this->input->post('id_category'),
                        'news_slug'          => $slug,
                        'news_title'         => htmlspecialchars($this->input->post('title', true)),
                        'news_body'          => $this->input->post('content'),
                        'picture'            => $up_data['upload']['file_name'],
                        'news_status'        => $this->input->post('status'),
                        'news_type'          => $this->input->post('type'),
                        'youtube_url'        => $this->input->post('youtube_url'),
                        'keywords'           => htmlspecialchars($this->input->post('keywords', true)),
                        'post_date'          => time()

                    );
                }
            }
            $this->news->addNews($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            News  has been post!</div>');
            redirect('news');
        }
    }

    public function category()
    {
        $data['title'] = 'News Category';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['category'] = $this->Category_model->getCategory();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/category', $data);
        $this->load->view('templates/footer');
    }

    public function detailNews($id_news)
    {
        $data['title'] = 'News Detail';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['detail'] = $this->news->detailNews($id_news);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/news_detail', $data);
        $this->load->view('templates/footer');
    }

    public function editNews($id_news)
    {
        $data['title']      = 'Edit Post';
        $data['user']       = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['category']   = $this->Category_model->getCategory();
        $data['edit']       = $this->news->detailNews($id_news);
        $data['type']       = ['News', 'Profile'];
        $data['status']     = ['Publish', 'Draft'];


        $this->form_validation->set_rules('keywords', 'Keywords', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/news_edit', $data);
            $this->load->view('templates/footer');
        } else {

            // News pic update

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types']    = 'gif|jpg|jpeg|png';
                $config['max_size']         = '2048';
                $config['upload_path'] = './assets/uploads/images/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {

                    $old_image = $data['edit']['picture'];
                    if ($old_image != '') {
                        unlink('./assets/uploads/images/' . $old_image);
                        unlink('./assets/uploads/images/thumbs/' . $old_image);
                    }

                    $new_picture = array('upload' => $this->upload->data());
                    // Start Thumbs
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './assets/uploads/images/' . $new_picture['upload']['file_name'];
                    $config['new_image']        = './assets/uploads/images/thumbs/' . $new_picture['upload']['file_name'];
                    $config['create_thumb']     = TRUE;
                    $config['quality']          = "100%";
                    $config['maintain_ratio']   = TRUE;
                    $config['width']            = 200;
                    $config['height']           = 200;
                    $config['thumb_marker']     = "";
                    $config['x_axis']           = 100;
                    $config['y_axis']           = 40;
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    // End thumbs
                    $this->db->set('picture', $new_picture['upload']['file_name']);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->news->editNews();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            News  has been updated!</div>');
            redirect('user');
        }
    }

    public function deleteNews($id_news)
    {
        $image = $this->db->get_where('news', ['id_news' => $id_news])->row_array();

        if ($image['picture'] != "") {
            unlink(FCPATH . '/assets/uploads/images/' . $image['picture']);
            unlink(FCPATH . '/assets/uploads/images/thumbs/' . $image['picture']);
        } else {
            echo 'Gambar Tidak Ada';
        }
        $data = [['id_news'] => $image['id_news']];
        $this->news->deleteNews($id_news);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            News  has been deleted!</div>');
        redirect('user');
    }
}
