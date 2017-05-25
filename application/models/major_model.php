<?php

class Major_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_major() {
        /* ใช้ในการเรียกรายชื่อคณะทั้งหมดมาแสดงผล
         * 
         */
       return $this->db->get('tb_major');
    
    }

    function add_major($data = null) {
        //ส่วนนี้ใช้ในการเพิ่มนักศึกษาครั้งแรกของการทำงาน
        if (!empty($data)) {
            return $this->db->insert('tb_major', $data);
        }
    }

    function del_major() {
        //ส่วนในการลบข้อมูลนักศึกษาทีทำการเลือก
        $this->db->where('id', $this->uri->segment(3)); //เอาidจาก$this->uri->segment(3)
        if ($this->db->delete('tb_major'))//เงื่อนไขตรวจสอบข้อมูลว่าลบได้หรือไม่
            return TRUE;
        else                    //ถ้าลบได้จะ true ไม่ได้จะ false
            return FALSE;
    }

    public function update_major() {
       // $this->db->where('major_id', $this->uri->segment(3)); //ดึงข้อมูลจากId
        return $this->db->get('tb_major');
    }
    function  find_major_by_fac_id($fac_id=null){
        /* ใช้ในการค้นหาสาขาวิชาโดยการนำรัหัสคณะเข้ามาค้นหา
         * 
         */
      	$this->db->where('fac_id',$fac_id);
		return $this->db->get('tb_major'); //ส่งกลับไปเพื่อแสดงผล
        
    }

}
