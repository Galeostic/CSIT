<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

       public function __construct() {
        parent::__construct();
       // $this->load->model('Admin_Model');  //ทำการload model admin model เข้ามาใช้งาน
        $this->load->helper('url');//เรียกใช้ helper url
	/**ส่วนของcontroller  login ทำงานเป็นส่วนแรกของระบบในการตรวจสอบการทำงาน
	function indexเรียกหน้า login ใน front/login */
       }
       function add_admin() {
        /* function ในการเพิ่มข้อมูลนักศึกษาเข้าระบบ ทำการรับค่ามาจาก view frm_std1 
         * เพิ่มข้อมูล ติดต่อ model student->function add_student
         * insert std_id,std_fname,std_lname,create  to table student
         */
        $data = array(
            'user' => $this->input->post('user'),
            'passwd' => $this->input->post('passwd'),
            'create' => date('Y-m-d H:i:s')
        );

        if ($this->Add_admin->add_admin($data)) {

            $this->load->view('admin/add_user', $data);
        }
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
   
    }
}
        


