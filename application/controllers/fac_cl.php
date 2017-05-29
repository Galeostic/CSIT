<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fac_Cl extends CI_Controller {

    /**ส่วนของcontroller-การทดลองfunction projcet/file/index.php/controllers/function */ 
     
      
    function __construct() {
        parent::__construct();
        $this->load->model('Fac_Model');
    }

    public function index() {
      
       $this->get_fac();
    }
    function get_fac(){
        $data['std_id']=$this->input->post('std_id');
            
        
          $data['rs']=$this->Fac_Model->get_fac(); 
       $this->load->view('front/get_fac_view',$data);
  // echo"daat". $data['std_id'];
      
      
    }
    
    
     function get_fac_B(){  //ส่วนติดต่อกับshow_fac
              
          $data['rs']=$this->Fac_Model->get_fac(); 
       $this->load->view('admin/show_fac',$data);
    }
    
    function get_fac_edit(){
     $var['rs']=$this->Fac_Model->get_fac(); 
        $this->load->view('admin/Show',$var);
    }
    
    function insert_fac()//เพิ่มข้อมูล
    {
         $data = array(
            'fac_id' => $this->input->post('fac_id'),
            'fac_name' => $this->input->post('fac_name'),
            'create_date' => date('Y-m-d H:i:s')
        );
         if ($this->Admin_Model->add_fac($data)) {
            $this->load->view('admin/add_fac', $data);
        }
    }
    
     function update_fac()//update major
    {
        $data=array(
                 'fac_id' => $this->input->post('fac_id'),
                'fac_name' => $this->input->post('fac_name'),
                'create' => date('Y-m-d H:i:s')
                );
        $this->db->where('id', $this->input->post('fac_id'));
        if($this->db->update('tb_facuty', $data))
            return TRUE;
        else
            return FALSE;
    }    
    
    
    function delete_fac() // delete
    {
        if($this->major_model->del_fac()== TRUE) { //เรียกใช้ del_fac ใน fac_model
            $data['result']=" ลบข้อมูลเรียบร้อยแล้ว ";
        } else {
            $data['result']=" ไม่สามารถลบข้อมูลได้";
        }
    }
}
 
