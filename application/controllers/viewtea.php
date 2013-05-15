<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Viewtea extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('tea');
        $this->load->model('category');
        $this->load->model('rating');
        $this->load->helper('url');
    }
    
    public function index()
    {
        $data['tea'] = $this->tea->load($this->input->get('id'));
        $data['category'] = $this->category->load($data['tea']['categories_ID']);
        $data['ratings'] = $this->rating->getTeaAverages($data['tea']['ID']);
        
        
        $this->load->view('tea_head');
        $this->load->view('tea_header');
        $this->load->view('tea_tabs');
        
        $this->load->view('tea_display', $data);
        
        $this->load->view('tea_footer');
    }
}