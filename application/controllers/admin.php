<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Admin_Model');  //ทำการload model admin model เข้ามาใช้งาน
        $this->load->helper('url');//เรียกใช้ helper url
	/**ส่วนของcontroller  login ทำงานเป็นส่วนแรกของระบบในการตรวจสอบการทำงาน
	function indexเรียกหน้า login ใน front/login */

	public function index()
	{
		$this->load->view('admin/admin_page');
	
}
// function insert facutly 
    function  add_fac(){
        
    }
    
    function  add_major(){
        //function insert major 
    }
    


}

