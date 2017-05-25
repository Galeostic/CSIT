<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fac_Cl extends CI_Controller {

    /**
      ส่วนของcontroller  login ทำงานเป็นส่วนแรกของระบบในการตรวจสอบการทำงาน
      function indexเรียกหน้า login ใน front/login
     */
    function __construct() {
        parent::__construct();
        $this->load->model('Fac_Model');
    }

    public function index() {
      
       $this->get_fac();
    }
    function get_fac(){
        $data['std_id']=$this->input->post('std_id');
            
        
          $data['rs']=$this->Fac_Model->get_fac(); 
       $this->load->view('front/get_fac_view',$data);
  // echo"daat". $data['std_id'];
      
      
    }
    function get_fac_edit(){
     $var['rs']=$this->Fac_Model->get_fac(); 
        $this->load->view('admin/Show',$var);
    }
}
 