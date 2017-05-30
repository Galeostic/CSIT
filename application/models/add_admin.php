<?php
class Add_admin extends CI_Model {
    
    public function insert()
    {
        $data=array(
                'user' => $this->input->post('user'),
                'passwd' => $this->input->post('passwd')
                );
        $query=$this->db->insert('tb_login', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
    ?>