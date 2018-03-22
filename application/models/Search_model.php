<?php
class Search_model extends CI_Model{

    public function __construct()
    {
        try{
            // require_once APPPATH.'/php/lib/XS.php';
            require_once '/usr/local/xunsearch/sdk/php/lib/XS.php';
        }catch(Exception $e){
            echo '出错了:'.$e->getMessage();
        }
    }

    public function get_tvid()
    {
        $xs = new XS('tvspider');
        $search = $xs->search;

        $this->load->helper('url');

        $query = $this->input->post('text');
        // 检索数据
        $search->setQuery($query);
        $result = $search->search();
        return $result;
        
    
    }
}
?>