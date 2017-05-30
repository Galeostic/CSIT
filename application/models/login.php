<?php

/* model login ใช้ในการตรวจสอบชื่อผู้ใช้งานในระบบ*/
 

class Login extends CI_Model {

    function __construct() {
        parent::__construct(); 
        
    }
    function chk_login($uname=null, $passwd=null){	
        /*ทำการตรวจสอบชื่อและรหัสผ่านที่รับมากับระบบว่ามีในระบบหรือไม่
         * 
         */
		$this->db->where('username',$uname);
		$this->db->where('passwd',$passwd);
		$rs = $this->db->get('tb_user');
		if($rs->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function select_userdata($uname, $passwd){
		$this->db->where('username',$uname);
		$this->db->where('passwd',$passwd);
		return $this->db->get('tb_user')->result_array();
	}
	

}
