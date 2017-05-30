<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--เป้นส่วนของการเรียกใช้ ไฟล์  css ,js ของ bootstrap จากภายในระบบทำให้ระบบไม่ต้องอาศัยการเรียกboostrap 
  จากภายนอก
  -->
   <?php echo css_asset('bootstrap.min.css');?>
  <?php echo js_asset('jquery.min.js');?>
 <?php echo js_asset('bootstrap.min.js');?> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>

<div class="container">
    <h2 ><center>เลือกรูปถ่าย </center></h2>
    <!-- ใช้  html helper ใช้ form_open_multipart ในการส่งค่าไป-->
  <?php echo form_open_multipart('register_std/do_upload');?>
    <div class="form-group-addon">
   
      <center> <i class="fa fa-camera" style="font-size:48px;color:red"></i></center>
<!-- ส่วนของการส่งค่าไป name=pic1 -->
      <input type="file" class="form-control" id="std_img"  name="std_img"  >
      <!-- ซอ่น std_id ไปกับ name=pic1  -->
      <input type="text" class="form-control" id="std_id"  name="std_id" value="<?php echo $std_id;?>">
    </div>
        <br><br>
      <center>
          <button type="submit" class="btn btn-primary" >&nbsp;ยืนยัน&nbsp;</button>
    &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;
    <button type="reset" class="btn btn-danger">&nbsp;ยกเลิก&nbsp;</button>
      </center>
    <?php echo form_close();?>
</div>


</body>
</html>
