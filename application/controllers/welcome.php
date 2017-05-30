<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_std extends CI_Controller {

	/**
	ส่วนของcontroller  login ทำงานเป็นส่วนแรกของระบบในการตรวจสอบการทำงาน
	function indexเรียกหน้า login ใน front/login
	 */
	public function index()
	{
		$this->load->view('front/frm_std1');
	
}
}

