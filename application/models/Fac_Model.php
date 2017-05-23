<?php

class Fac_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_fac() {
        /* ใช้ในการเรียกรายชื่อคณะทั้งหมดมาแสดงผล
         * 
         */
       return $this->db->get('tb_faculty');
    
    }

    function add_fac($data = null) {
        //ส่วนนี้ใช้ในการเพิ่มนักศึกษาครั้งแรกของการทำงาน
        if (!empty($data)) {
            return $this->db->insert('tb_faculty', $data);
        }
    }

    function del_fac() {
        //ส่วนในการลบข้อมูลนักศึกษาทีทำการเลือก
        $this->db->where('id', $this->uri->segment(3)); //เอาidจาก$this->uri->segment(3)
        if ($this->db->delete('tb_faculty'))//เงื่อนไขตรวจสอบข้อมูลว่าลบได้หรือไม่
            return TRUE;
        else                    //ถ้าลบได้จะ true ไม่ได้จะ false
            return FALSE;
    }

    public function update_fac() {
        $this->db->where('fac_id', $this->uri->segment(3)); //ดึงข้อมูลจากId
        return $this->db->get('tb_faculty');
    }

}
