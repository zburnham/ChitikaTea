<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Tea_auth.php
 * Library for login/logout for tea rating application.
 * 
 * @author zburnham
 */

class Tea_auth
{
    /**
     * CodeIgniter superobject.
     *
     * @var CI_Controller
     */
    protected $CI;
    
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->CI =& get_instance();
        
        $this->CI->load->model('taster');
        $this->CI->load->library('encrypt');
        $this->CI->load->library('session');
    }
    
    /**
     * Checks for valid authentication.
     * 
     * @param string $login
     * @param string $password
     * @return bool
     */
    public function auth($login, $password)
    {
        $hashedPassword = $this->CI->encrypt->sha1($password);
        $result = $this->CI->taster->checkValidCredentials($login, $hashedPassword);
        
        if ($result) {
            $id = $this->CI->taster->getIdFromLogin($login);
            $this->CI->session->set_userdata('ID', $id);
        }
        return $result;
    }
    
    /**
     * Destroys session.
     * 
     * @return void
     */
    public function logout()
    {
        $this->CI->session->unset_userdata('ID');
    }
    
    /**
     * Checks status.
     * 
     * @return boolean
     */
    public function check()
    {
        if (FALSE !== $this->CI->session->userdata('ID'))
        {
            return TRUE;
        }
        return FALSE;
    }
}
