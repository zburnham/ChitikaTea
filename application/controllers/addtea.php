<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * addtea.php
 * Controller to add a new tea to the system.
 * 
 * @author zburnham
 */

class Addtea extends MY_Controller
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('tea');
        $this->load->model('category');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('tea_auth');
    }
    
    /**
     * Displays form to enter new tea.
     */
    public function index()
    {
        if (!$this->tea_auth->check()) {
            redirect();
        }
        
        $data['categories'] = $this->category->getList();
        
        $this->form_validation->set_rules('tea_name', 'Tea Name', 'required');
        $this->form_validation->set_rules('categories_ID' , 'Categories_ID', 'is_natural_no_zero');
        $this->form_validation->set_rules('categories_ID' , 'Categories_ID', 'required');
        
        $this->load->view('tea_head');
        $this->load->view('tea_header');
        $this->load->view('tea_login', $this->getLogged_in());
        $this->load->view('tea_tabs');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('forms/tea_create.php', $data);
        } else {
            $this->tea->create();
        }
        
        $this->load->view('tea_footer');
    }
}

