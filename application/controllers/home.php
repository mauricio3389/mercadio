<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start(); //we need to call PHP's session object to access it through CI

class Home extends CI_Controller {

    function __construct() {

        parent::__construct();
    }

    function index() {

        $this->load->library('session');
        
        if ($this->session->userdata('logged_in')) {

            $session_data = $this->session->userdata('usuario');
            $this->load->model('Api_model', 'api');
            
            $this->load->view('home_view', null);
        } else 
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function Conect()
    {
        $this->load->helper('url');
        $this->load->model('Api_model', 'api');
        $this->load->library('session');
        
        $this->api->build_conn();
        $user = $this->api->conn->getWithAccessToken('/users/me');
                
        if(!isset($user['json']['nickname']) || count($user) == 0)
        {        
            redirect($this->api->conn->getLoginUrl());
        }
        else 
        {
            $newdata = array(
                   'nickname' => $user['json']['nickname'],
                   'usuario'  => $this->session->userdata('usuario'),
                   'logged_in' => TRUE,
                    'logged_in_MELI' => TRUE
               );

            $this->session->set_userdata($newdata);
            
            redirect('home', 'refresh');
        }
    }
    
    function logout() {

        $this->load->library('session');
        $this->load->helper('url');
        
        $this->session->unset_userdata('logged_in');

        $this->load->model('Api_model', 'api');
        
        $this->api->build_conn();
        
        
        
        session_destroy();

        redirect('', 'refresh');
    }
}
?>