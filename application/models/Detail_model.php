<?php
class Detail_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_urls($slug = FALSE){
        if($slug == FALSE){
            return '';
        }
        $slug = base64_decode($slug);
        $query = $this->db->query('SELECT url_name, url FROM tv_urls where nid='.$slug.';');
        return $query->result_array();
    }

}


?>