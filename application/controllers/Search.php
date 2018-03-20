<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function view($page = 'home')
	{
        if ( ! file_exists(APPATH.'views/pages/'.$page.'.php') )
        {
            show_404();
        }

        $this->load->view('pages'.$page);
	}
}
