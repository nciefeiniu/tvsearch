<?php
class Search_model extends CI_Model{

    public function __construct()
    {
        try{
            require_once '../php/lib/XS.php';
            $xs = new XS('tvspider');
            $search = $xs->search;
        }catch(Exception $e){
            echo 'waring:'.$e->getMessage();
        }
    }

    public function get_tvid($slug = FALSE)
    {
        if $slug === FALSE:
        {
            $this->load->search('index');
        }
        else:
        {
            $query = $slug;
            // 检索数据
            $search->setQuery($query);
            $result = $search->search();
            return $result;
        }
    
    }
}
?>