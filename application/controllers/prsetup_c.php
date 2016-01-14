<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Prsetup_c extends CI_Controller {

    public function index() {
        $this->load->view('temps/prsetup');
    }
    
    
}

