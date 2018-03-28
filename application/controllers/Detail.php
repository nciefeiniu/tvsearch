<?php
class Detail extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('detail_model');
        $this->load->helper('url_helper');
    }

    public function get_urls(){
        $slug = $this->uri->segment(3, 0);
        $data['name'] = urldecode($this->uri->segment(4, 0));
        $data['urls'] = $this->detail_model->get_urls($slug);
        
        $this->load->view('detail', $data);
    }
}
?>