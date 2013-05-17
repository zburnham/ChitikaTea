<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * search.php
 * Controller to provide search form.
 * 
 * @author zburnham
 */

class Search extends MY_Controller
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('category');
        $this->load->model('tea');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    
    /**
     * Displays search form.
     */
    public function index()
    {
        $this->form_validation->set_rules('keyword', 'Keyword', 'required');
                
        $this->load->view('tea_head');
        $this->load->view('tea_header');
        $this->load->view('tea_login', $this->getLogged_in());
        $this->load->view('tea_tabs');
        
        if (FALSE === $this->form_validation->run()) {
            $this->load->view('forms/tea_search');
        } else {
            $this->load->view('search_results', $this->tea->search());
        }
    }
}