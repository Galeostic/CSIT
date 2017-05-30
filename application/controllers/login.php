<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    /**
      ส่วนของcontroller  login ทำงานเป็นส่วนแรกของระบบในการตรวจสอบการทำงาน
      function indexเรียกหน้า login ใน front/login
     */
    public function index() {
       $this->load->view('front/login');
   // $this->load->view('front/get_fac_view');
    
        }

    function chk_login() {
        $this->load->view('front/view_resume');
    }

}
