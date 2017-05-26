<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register_std extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Student');  //ทำการload model student เข้ามาใช้งาน
        $this->load->model('Fac_Model');
        $this->load->model('Major_Model');
        $this->load->helper('url');
    }

    /**
      ส่วนของcontroller  login ทำงานเป็นส่วนแรกของระบบในการตรวจสอบการทำงาน
      function indexเรียกหน้า login ใน front/login
     */
    public function index() {
        $this->load->view('front/frm_std1');
    }

    function upload_img($std_id = null) {
        $this->load->view('front/frm_upload_img', $std_id);
    }

    function do_upload() {
        /* function save image ใช้ในการเก็บรูปภาพเข้าไปใน asset/images/img_std
         * ระบบจะทำการเปลี่ยนชื่อภาพเป็นรหัสนักศึกษาและเก็บ path รูปไว้ใน tb_student->path
         */
        $name = $this->input->post('std_id'); //เอา std_id มาเป็นชื่อของภาพ

        $type = explode('.', $_FILES["std_img"]["name"]); // แยกชื่อภาพกันนามสกุลภาพออกจากกันโดยการหา . เป็นตัวแบ่ง
        $type = $type[count($type) - 1];
        if (is_uploaded_file($_FILES["std_img"]["tmp_name"])) {
            move_uploaded_file($_FILES["std_img"]["tmp_name"], "./assets/images/img_std/" . $name . '.' . $type);

            //echo $img_path = base_url('/assets/images/img_std/' . $name . '.' . $type);
            echo"<br><br>";
            $path_img = ($name . '.' . $type);  //เก็บชื่อภาพไว้เพือใช้เขียนลงในตาราง
            // echo $pic = ($name . '.' . $type);
            //เอา path_img ส่งไปให้ model
            $data = array('path_img' => $path_img);

            $this->Student->add_path_img($data, $name); //ส่ง $name เอาไปเป็นตัวอ้างอิง
        }
        //เมื่อ  upload รูปแล้ว ให้ทำการเรียก view get_major_view ขึ้นมาและทำการส่ง $data 
        // $this->load->view('front/get_fac_view',$data);
        $this->img_view($name);  //ส่งค่าไปยัง img_view
    }

    function img_view($name) {
        //ส่งค่าไปยัง view-->>
        $std_id = $name;
        //echo"filename==". $name;
        //ส่งค่าไปให้ model student เพื่อทำการ select
        //$this->Student->get_student($std_id);
        $var['id'] = $this->Student->get_student($std_id);
        $this->load->view('front/img_view', $var);
    }

    function add_student() {
        /* function ในการเพิ่มข้อมูลนักศึกษาเข้าระบบ ทำการรับค่ามาจาก view frm_std1 
         * เพิ่มข้อมูล ติดต่อ model student->function add_student
         * insert std_id,std_fname,std_lname,create  to table student
         */
        $data = array(
            'std_id' => $this->input->post('std_id'),
            'std_fname' => $this->input->post('std_fname'),
            'std_lname' => $this->input->post('std_lname'),
            'create' => date('Y-m-d H:i:s')
        );

        if ($this->Student->add_student($data)) {

            $this->load->view('front/frm_upload_img', $data);
        }
    }

    function reg_std_fac($data = null) {
        /* function ในการทำการลงทะเบียนในส่วนของคณะของนักศึกษาที่สังกัด
         * 
         */
        // $var['rs'];
        $this->load->view('front/frm_std_fac', $data);
    }

    function add_major() {
        /* เพิ่มรหัสสาขาวิชาที่สังกัดในข้อมูลนักส
         * 
         */
        $data = array('std_id' => $this->input->post('std_id'),
            'std_g_id' => $this->input->post('std_g_id'),
            'major_id' => $this->input->post('major_id')
        );
        $this->Student->add_major($data);  //updata ข้อมูล major_id,std_g_id
        $this->load->view('front/contact_view', $data); //ส่งข้อมูลไปยังหน้า contact_view
    }

    function add_fac() {
        $data = array(
            'fac_id' => $this->input->post('fac_id'));
        $std_id = $this->input->post('std_id');
        $this->Student->update_fac($data, $std_id);
        //ให้ส่งไปที่ modelและให้โมเดลส่งกลับมาเหมือนกับการส่งไปแก้ไข 
        $this->find_major($std_id, $data);
    }

    function find_major($std_id, $data) {
        /* ส่วนในการค้นหาสาขาที่นักศึกษาสังกัดอยู่จากข้อมูลการเลือกคณะ
         * โดยการเลือกจากการนำ id ของคณะมาทำการเลือก
         */
        echo $std_id . "ส่งมาจากfind_major<br>";
        $data['id'] = $std_id;  //ทำให้เป็น array เพื่อส่งไปยัง view
        $fac_id = $data['fac_id'];
        echo"ทดสอบการส่งรหัสคณะเข้ามา" . $fac_id;
        $data['rs'] = $this->Major_Model->find_major_by_fac_id($fac_id);

        $this->load->view('front/get_major_view', $data);
    }

    function contact() {
        /* ส่วนในการเพิ่มการติดต่อ face line phone 
         * 
         */
        $data = array('std_id' => $this->input->post('std_id'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'facebook' => $this->input->post('facebook'),
            'line_id' => $this->input->post('lineid'));
        $this->Student->add_contact($data);
        $this->load->view('front/add_password_view', $data);
    }

    function add_password() {
        $user_type='1';
        $data = array('uname' => $this->input->post('std_id'),
            'passwd' => $this->input->post('password'),
            'type' =>$user_type,
            'create_date' => date('Y-m-d H:i:s')
        );
        if ($this->Student->add_password($data)) {

            $this->load->view('front/view_resume', $data);
        }
    }

}
