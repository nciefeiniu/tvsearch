<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('search_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['n'] = $this->search_model->get_tvid();
    }

	public function view($page = 'home')
	{

	}
}
