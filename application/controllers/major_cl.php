<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class major_Cl extends CI_Controller {

    /** ส่วนของcontroller  */
     
     function __construct() {
        parent::__construct();
        $this->load->model('Fac_Model');//เรียกใช้งาน fac_model
        $this->load->model('Major_Model');//เรียกใช้งาน major_Model
    }

    public function index() {
      
       $this->get_major();
    }
    function get_major(){  //ทีมfront ใช้งาน //ทำไมมาอยุ่ในนี้
             $data['rs']=$this->Major_Model->get_major(); 
       $this->load->view('front/get_major_view',$data);//*****??
   echo"daat". $data['std_id'];//*??
      
    }     

    function edit_major(){ //แก้ไข้ major
     $var['rs']=$this->Major_Model->get_major(); 
        $this->load->view('admin/Show_major',$var);
    }
    
    function update_major()//update major
    {
        $data=array(
                 'major_id' => $this->input->post('major_id'),
                'major_name' => $this->input->post('major_name'),
                'create' => date('Y-m-d H:i:s')
                );
        $this->db->where('id', $this->input->post('major_id'));
        if($this->db->update('tb_major', $data))
            return TRUE;
        else
            return FALSE;
    }    
    
    function delete_major() // delete
    {
        if($this->major_model->del_major()== TRUE) { //เรียกใช้ del_major ใน major_model
            $data['result']=" ลบข้อมูลเรียบร้อยแล้ว ";
        } else {
            $data['result']=" ไม่สามารถลบข้อมูลได้";
        }
    }
}
 
    
