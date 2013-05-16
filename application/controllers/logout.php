<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('tea_auth');
        $this->load->helper('url');
    }
    
    public function index()
    {
        $this->tea_auth->logout();
        redirect('');
    }
}
