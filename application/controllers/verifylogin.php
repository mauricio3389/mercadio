<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->model('user', '', TRUE);
    }

    function index() {
        $this->load->helper('url');
        $this->load->library('session');

        //Field validation succeeded.  Validate against database
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        if ($this->form_validation->run() == TRUE) 
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            //query the database
            $result = $this->user->login($username, $password);

            if ($result == TRUE) 
                {
                $newdata = array(
                    'nickname' => NULL,
                    'usuario' => $username,
                    'logged_in' => TRUE,
                    'logged_in_MELI' => FALSE
                );

                $this->session->set_userdata($newdata);

                redirect('home', 'location');
            } 
            else {
                $this->form_validation->set_message('check_database', 'Invalid username or password');
                
                redirect('user', 'refresh');
            }
        } else {
            redirect('login', 'refresh');
        }
    }

}

?>
