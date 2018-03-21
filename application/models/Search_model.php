<?php
class Search_model extends CI_Model{

    public function __construct()
    {
        require_once '../php/lib/XS.php';
        $xs = new XS('tvspider');
    }

    public function get_tvid($slug = FALSE)
    {
        if $slug === FALSE:
        {

        }
        else:
        {
            $this->db->select('id, name')
            $query = $this->db->get_where('tv_name', array('name' => $slug));
            return $query->result_array();
        }
    
    }
}
?>