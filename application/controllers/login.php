<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * login.php
 * Controller to allow registered user to authenticate.
 * 
 * @author zburnham
 */

class Login extends CI_Controller
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('taster');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('tea_auth');
        $this->load->helper('url');
    }
    
    /**
     * Displays login form.
     */
    public function index()
    {
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        $this->load->view('tea_head');
        $this->load->view('tea_header');
        $this->load->view('tea_tabs');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('forms/login');
        } else {
            if ($this->tea_auth->auth($this->input->post('login'), $this->input->post('password'))) {
                $this->load->view('login_successful');
                redirect('');
            } else {
                $this->load->view('login_failure');
                $this->load->view('forms/login');
            }
        }
        
        $this->load->view('tea_footer');
    }
}
