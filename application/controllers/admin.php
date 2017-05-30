<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

       public function __construct() {
        parent::__construct();
       // $this->load->model('Admin_Model');  //ทำการload model admin model เข้ามาใช้งาน
        $this->load->helper('url');//เรียกใช้ helper url
	/**ส่วนของcontroller  login ทำงานเป็นส่วนแรกของระบบในการตรวจสอบการทำงาน
	function indexเรียกหน้า login ใน front/login */
       }
     
// function insert facutly 
     public function  add_fac(){
       $data=array(
                'fac_id' => $this->input->post('fac_id'),
                'fac_name' => $this->input->post('fac_name')
                );
        $query=$this->db->insert('tb_facuty', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
        }
    
         
    
    public function  add_major(){
   $data=array(
                'major_id' => $this->input->post('major_id'),
                'major_name' => $this->input->post('major_name')
                );
        $query=$this->db->insert('tb_major', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
        


