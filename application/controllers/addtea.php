<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addtea extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('tea');
        $this->load->model('category');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $data['categories'] = $this->category->getList();
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('categories_ID' , 'Categories_ID', 'is_natural_no_zero');
        $this->form_validation->set_rules('categories_ID' , 'Categories_ID', 'required');
//        $this->form_validation->set_rules('taste', 'Taste' , 'required');
//        $this->form_validation->set_rules('color', 'Color' , 'required');
//        $this->form_validation->set_rules('body', 'Body' , 'required');
        
        
        $this->load->view('tea_head');
        $this->load->view('tea_header');
        $this->load->view('tea_tabs');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('forms/tea_create.php', $data);
        } else {
            $this->tea->create();
        }
        
        $this->load->view('tea_footer');
    }
}

