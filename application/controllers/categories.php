<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * categories.php
 * Controller to display categories to choose.
 * 
 * @author zburnham
 */

class Categories extends MY_Controller
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('category');
        $this->load->helper('url');
    }
    
    /**
     * Displays a list of categories.
     */
    public function index()
    {
        $data = array();
        $data['categories'] = $this->category->getList();
        
        $this->load->view('tea_head');
        $this->load->view('tea_header');
        $this->load->view('tea_login', $this->getLogged_in());
        $this->load->view('tea_tabs');
        $this->load->view('tea_body', $data);
        $this->load->view('tea_footer');
    }
}
