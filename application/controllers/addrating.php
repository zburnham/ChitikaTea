<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * addrating.php
 * Controller to add a new rating.
 * 
 * @author zburnham
 */

class Addrating extends MY_Controller
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('taster');
        $this->load->model('rating');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('tea_auth');
    }
    
    /**
     * Displays form to create a new rating.
     */
    public function index()
    {
        if (!$this->tea_auth->check()) {
            redirect();
        }
        
        $data['teas_ID'] = ($this->input->get('id')) ?: $this->input->post('teas_ID');
        $taster = $this->taster->load($this->session->userdata('ID'));
        $data['tasters_ID'] = $taster['ID'];
        
        $this->form_validation->set_rules('taste', 'Taste', 'required');
        $this->form_validation->set_rules('taste', 'Taste', 'is_natural');
        $this->form_validation->set_rules('color', 'Color', 'required');
        $this->form_validation->set_rules('color', 'Color', 'is_natural');
        $this->form_validation->set_rules('body', 'Body', 'required');
        $this->form_validation->set_rules('body', 'Body', 'is_natural');
        
        $this->load->view('tea_head');
        $this->load->view('tea_header');
        $this->load->view('tea_login', $this->getLogged_in());
        $this->load->view('tea_tabs');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('forms/tea_rating.php', $data);
        } else {
            $this->rating->create();
            redirect('viewtea?id=' . $data['teas_ID']);
        }
        
        $this->load->view('tea_footer');
    }
}

