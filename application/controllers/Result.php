<?php
class Result extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('search_model');
        $this->load->helper('url_helper');
    }

    public function view($slug = NULL) {
        $data['ids'] = $this->search_model->get_tvid($slug);
        $this->load->view('searchresult', $data);
    }
}



?>