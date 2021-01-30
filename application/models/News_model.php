<?php
defined('BASEPATH') or exit('No direct script access allowed');


class News_model extends CI_Model
{

    public function getAllNews()
    {
        return $this->db->get('news')->result_array();  // Produces: SELECT * FROM mytable

    }

    public function getNews()
    {
        // $query = " SELECT `news`.*,`user`.`name`,`news_cat`.`cat_name`
        //             FROM `news` 
        //             JOIN `user` 
        //             JOIN `news_cat`
        //             ON `news`.`id_user` = `user`.`id` AND `news`.`id_cat`  =`news_cat`.`id_cat`
        //             ORDER BY `news`.`id_news` DESC
        // ";

        // return $this->db->query($query)->result_array();
        $this->db->select('*');
        $this->db->from('news');
        $this->db->join('user', 'user.id = news.id_user');
        $this->db->join('news_cat', 'news.id_cat = news_cat.id_cat');
        $this->db->ORDER_BY('id_news', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function detailNews($id_news)
    {
        return $this->db->get_where('news', ['id_news' => $id_news])->row_array();
    }


    public function addNews($data)
    {

        $this->db->insert('news', $data);
    }

    public function editNews()
    {

        // Insert data
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        $data = [
            'id_user'            => $this->input->post('user_id'),
            'id_cat'             => $this->input->post('id_category'),
            'news_slug'          => $slug,
            'news_title'         => htmlspecialchars($this->input->post('title', true)),
            'news_body'          => $this->input->post('content'),
            'news_status'        => $this->input->post('status'),
            'news_type'          => $this->input->post('type'),
            'youtube_url'        => $this->input->post('youtube_url'),
            'keywords'           => htmlspecialchars($this->input->post('keywords', true)),
            'post_date'          => time()

        ];

        $this->db->where('id_news', $this->input->post('id_news'));
        $this->db->update('news', $data);
    }

    public function deleteNews($id_news)
    {
        $this->db->where('id_news', $id_news);
        $this->db->delete('news');
    }
}
