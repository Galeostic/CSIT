<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	ส่วนของcontroller  login ทำงานเป็นส่วนแรกของระบบในการตรวจสอบการทำงาน
	function indexเรียกหน้า login ใน front/login
	 */
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

