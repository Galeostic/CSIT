<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class major_Cl extends CI_Controller {

    /**
      ส่วนของcontroller  login ทำงานเป็นส่วนแรกของระบบในการตรวจสอบการทำงาน
      function indexเรียกหน้า login ใน front/login
     */
    function __construct() {
        parent::__construct();
        $this->load->model('Fac_Model');
    }

    public function index() {
      
       $this->get_major();
    }
    function get_major(){
        $data['std_id']=$this->input->post('std_id');
            
        
          $data['rs']=$this->Major_Model->get_major(); 
       $this->load->view('admin/get_major_view',$data);
   echo"daat". $data['std_id'];
      
      
    }
    function get_major_edit(){
     $var['rs']=$this->Major_Model->get_major(); 
        $this->load->view('admin/Show_major',$var);
    }
}
 