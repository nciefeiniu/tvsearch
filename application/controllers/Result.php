<?php
class Result extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('search_model');
        $this->load->helper('url_helper');
    }

    public function view($slug = NULL) {
        // 验证表单是否被提交和是否通过验证规则
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('text', 'Text', 'required');
        // 分页
        $this->load->library('pagination');
        $config['base_url'] = base_url().'/index.php/result/view/';
        $config['total_rows'] = $this->search_model->get_count();
        $config['per_page'] = 7;
        $config['uri_segment'] = 3;
        
        $config['num_links'] = 2;
        $config['num_tag_open'] = '<div class="listPage2">';
        $config['num_tag_close'] = '</div>';
        $config['cur_tag_open'] = '<div class="listPage3"><a href="javascript:void(0)">';
        $config['cur_tag_close'] = '</a></div>';
        $config['prev_link'] = '<<';
        $config['prev_tag_open'] = '<div class="listPage">';
        $config['prev_tag_close'] = '</div>';
        $config['next_link'] = '>>';
        $config['next_tag_open'] = '<div class="listPage">';
        $config['next_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        // 开始分页
        $start = $this->uri->segment(3,0);
        $data['ids'] = $this->search_model->get_tvid($start * 7);
        $data['pages'] = $this->pagination->create_links();
        // 数据传递给前端
        $this->load->view('Searchresult', $data);
        
    }
}



?>