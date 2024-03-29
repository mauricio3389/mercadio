<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

session_start(); //we need to call PHP's session object to access it through CI

class Register extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index() {

        $this->load->library('session');
        
        if ($this->session->userdata('logged_in')) {

            $session_data = $this->session->userdata('logged_in');

            $data['username'] = $session_data['username'];

            $this->load->view('register_view');
        } else 
        {

            //If no session, redirect to login page

            redirect('login', 'refresh');
        }
    }
}
?>
