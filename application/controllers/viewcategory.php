<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Viewcategory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('category');
        $this->load->model('tea');
        $this->load->helper('url');
    }
    
    public function index()
    {
        $data = array();
        $data['category'] = $this->category->load($this->input->get('id'));
        $data['teas'] = $this->tea->getAllInCategory();
        
        $this->load->view('tea_head');
        $this->load->view('tea_header');
        $this->load->view('tea_tabs');
        $this->load->view('tea_body_category', $data);
        $this->load->view('tea_footer');
    }
}
