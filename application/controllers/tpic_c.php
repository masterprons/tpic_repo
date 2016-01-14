<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tpic_c extends CI_Controller {

    public function index() {
        $data['title'] = "Title_H1";
        $data['description'] = "Title_H1";
        $data['keywords'] = "Title_H1";
        
        $this->load->view('tpic', $data);
    }
}