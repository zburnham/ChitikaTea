<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * viewratings.php
 * Controller to view all ratings from a particular taster.
 * 
 * @author zburnham
 */

class Viewratings extends MY_Controller
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('category');
        $this->load->model('rating');
        $this->load->model('taster');
    }
    
    /**
     * Displays ratings from one taster.
     */
    public function index()
    {
        $data['taster'] = $this->taster->load($this->input->get('id'));
        
        $data['ratings'] = $this->rating->getAllRatingsByTaster($data['taster']['ID']);
        
        $this->load->view('tea_head');
        $this->load->view('tea_header');
        $this->load->view('tea_login', $this->getLogged_in());
        $this->load->view('tea_tabs');
        
        $this->load->view('ratings_display', $data);
        
        $this->load->view('tea_footer');
    }
}
