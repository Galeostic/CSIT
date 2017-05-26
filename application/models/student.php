<?php
//model การทำงานในส่วนของตาราง student เพื่อทำงาน เพิ่ม ลบ แก้ไข ค้นหา
class Student extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    function get_student($std_id=null){
   
      	$this->db->where('std_id',$std_id);
		return $this->db->get('tb_student')->result();
          
    }
    function add_student($data=null){
        //ส่วนนี้ใช้ในการเพิ่มนักศึกษาครั้งแรกของการทำงาน
        if(!empty($data)){
            return $this->db->insert('tb_student',$data);
        }
    }
    function add_path_img($data=null,$name=null){
        
        $this->db->where('std_id',$name);
		return $this->db->update('tb_student',$data);
	
    }
            function find_student_id(){
        
    }
    function save_student(){
        //ใช้ในส่วนของการ update ข้อมูลในตารางของ student
        
    }
    function  del_student(){
        //ส่วนในการลบข้อมูลนักศึกษาทีทำการเลือก
        
    }
    function update_fac($data=null,$std_id){
        $this->db->where('std_id',$std_id);
        return $this->db->update('tb_student',$data);
    }
    function add_major($data=null){
         /*เพิมรหัสสาขาวิชาเข้าระบบและรหัสกลุ่มเช้าระบบ
         */
     $this->db->where('std_id',$data['std_id']);
        return $this->db->update('tb_student',$data);
    }
    function add_contact($data=null){
        $this->db->where('std_id',$data['std_id']);
        return $this->db->update('tb_student',$data);
    }
        function add_password($data=null){
        //ส่วนนี้ใช้ในการเพิ่มนักศึกษาครั้งแรกของการทำงาน
        if(!empty($data)){
            return $this->db->insert('tb_login',$data);
        }
    }
}