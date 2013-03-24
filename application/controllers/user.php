<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct() {

        parent::__construct();
    }

    function index() 
    {
        $this->load->library('session');
        $this->load->helper('url');
        
        $this->load->helper(array('form'));

        $login = $this->session->userdata('logged_in');
        
        if($login == TRUE)
        {
            redirect('home');
        }
        else
        {
            $this->load->view('login_view');
        }        
    }
}

?>
