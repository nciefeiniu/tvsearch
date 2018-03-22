<?php
class Search_model extends CI_Model{

    public function __construct()
    {
        try{
            require_once APPPATH.'/php/lib/XS.php';
            $xs = new XS('tvspider');
            $search = $xs->search;
        }catch(Exception $e){
            echo 'waring:'.$e->getMessage();
        }
    }

    public function get_tvid()
    {
        $this->load->helper('url');
        
        $query = $this->input->post('text');
        // 检索数据
        $search->setQuery($query);
        $result = $search->search();
        return $result;
        
    
    }
}
?>