<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Call extends CI_Controller { /* สำหรับเรียกใช้หน้าต่างๆ *ป้องการกันสับสนในการเรียกใช้งาน* */

       public function __construct() {
        parent::__construct();
       // $this->load->model('Admin_Model');  //ทำการload model admin model เข้ามาใช้งาน
        $this->load->helper('url');//เรียกใช้ helper url
	
       }
      public function index()
	{
	$this->load->view('admin/admin_page');
	}
        public function page_user()
        {
        $this->load->view('admin/add_user');
        }
         public function page_show_fac()
        {
        $this->load->view('admin/show_fac');
        }
        public function  page_add_fac()
                {
       $this->load->view('admin/add_faculty');
        }
    
         public function  page_add_major(){
         $this->load->view('admin/add_major');
        }
}
        


