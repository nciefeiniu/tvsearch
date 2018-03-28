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

    public function get_tvid($limit = 0)
    {
        $xs = new XS('tvspider');
        $search = $xs->search;

        $this->load->helper('url');

        $query = $this->input->post('text');
        if (empty($query)) key($query= get_hotquery()) ;
        // 检索数据
        $search->setQuery($query);
        $result = $search->setLimit(7, $limit)->search();
        return $result;
    }

    public function get_count(){
        $xs = new XS('tvspider');
        $search = $xs->search;
        $this->load->helper('url');
        $query = $this->input->post('text');
        if (empty($query)) key($query= get_hotquery()) ;
        // 检索数据
        $search->setQuery($query);
        $count = $search->count();
        return $count;

    }

    public function get_hotquery(){
        $xs = new XS('tvspider');
        $search = $xs->search;
        return $search->getHotQuery(1, 'currnum');

    }
}
?>