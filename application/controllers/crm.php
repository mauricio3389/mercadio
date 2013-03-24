<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

session_start(); //we need to call PHP's session object to access it through CI

class Crm extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index() 
    {        
        $this->load->view('crm_view');        
    }
}
?>
