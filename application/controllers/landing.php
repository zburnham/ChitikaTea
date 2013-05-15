<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('category');
        $this->load->helper('url');
    }
    
    public function index()
    {
        $data = array();
        $data['categories'] = $this->category->getList();
        
        $this->load->view('tea_head');
        $this->load->view('tea_header');
        $this->load->view('tea_tabs');
        $this->load->view('tea_body', $data);
        $this->load->view('tea_footer');
    }
}
