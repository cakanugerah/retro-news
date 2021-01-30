<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Category_model extends CI_Model
{
    public function getCategory()
    {
        return $this->db->get('news_cat')->result_array();
    }
}
