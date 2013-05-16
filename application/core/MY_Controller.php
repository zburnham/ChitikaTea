<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    /**
     * Logged-in status.
     *
     * @var bool
     */
    protected $logged_in = array('status' => FALSE);
    
    /**
     * Constructor.  Checks for logged-in status.
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('tea_auth');
        if ($this->tea_auth->check()) {
            $this->setLogged_in(array('status' => TRUE));
        }
    }
    
    /**
     * @return booleam
     */
    public function getLogged_in()
    {
        return $this->logged_in;
    }

    /**
     * @param bool $logged_in
     * @return \MY_Controller
     */
    public function setLogged_in($logged_in)
    {
        $this->logged_in = $logged_in;
        return $this;
    }
}
