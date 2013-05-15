<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('taster');
        $this->load->library('session');
        $this->load->library('form_validation');
    }
    
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
            if ($this->taster->authenticate()) {
                $this->session->set_userdata('login', $this->input->post('login'));
                $this->load->view('login_successful');
            } else {
                $this->load->view('login_failure');
                $this->load->view('forms/login');
            }
        }

        $this->load->view('tea_footer');
    }
}
