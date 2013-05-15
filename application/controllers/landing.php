<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function __construct()
    {
        $this->load->database();
        $this->load->model('tea');
    }
    
    public function index()
    {
        $data = array();
        $data['teas'] = $this->tea->
        
        $this->load->view('tea_head');
        $this->load->view('tea_header');
        $this->load->view('tea_tabs');
        $this->load->view('tea_body');
        $this->load->view('tea_footer');
    }
}
