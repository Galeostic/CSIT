<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reg_Std_Fac extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('front/reg_std_fac');
    }

}
