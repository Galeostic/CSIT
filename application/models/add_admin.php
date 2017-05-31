<?php
class Add_admin extends CI_Model {
    
    function add_admin($data=null){
        //ส่วนนี้ใช้ในการเพิ่มนักศึกษาครั้งแรกของการทำงาน
        if(!empty($data)){
            return $this->db->insert('tb_login',$data);
        }
    }
    
}
    ?>