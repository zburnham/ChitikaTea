<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * logout.php
 * Controller to log out a taster.
 * 
 * @author zburnham
 */

class Logout extends CI_Controller
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('tea_auth');
        $this->load->helper('url');
    }
    
    /**
     * Destroys login and redirects to landing page.
     */
    public function index()
    {
        $this->tea_auth->logout();
        redirect('');
    }
}
