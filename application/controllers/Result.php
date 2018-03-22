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

        if ($this->form_validation->run() === FALSE){
            // 错误跳回首页
            $this->load->view('index');
        }else{
            $data['ids'] = $this->search_model->get_tvid();
            $this->load->view('searchresult', $data);
        }
    }
}



?>