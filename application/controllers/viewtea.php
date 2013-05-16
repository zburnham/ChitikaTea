<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Viewtea extends MY_Controller
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
        $data['averages'] = $this->rating->getTeaAverages($data['tea']['ID']);
        $data['ratings'] = $this->rating->getAllRatingsByTea($data['tea']['ID']);
        
        $this->load->view('tea_head');
        $this->load->view('tea_header');
        $this->load->view('tea_login', $this->getLogged_in());
        $this->load->view('tea_tabs');
        
        $this->load->view('tea_display', $data);
        
        $this->load->view('tea_footer');
    }
}