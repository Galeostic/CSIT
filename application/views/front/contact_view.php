<?php

/* 
 *หน้าแสดงในส่วนของการติดต่อ ประกอบด้วย email line  facebook phone
 */

echo "std_id get fromt controll->register_std---". $std_id;
?>

<html>
    <title>Student Resume</title>
    <head><meta name=viewport content="width=device-width, initial-scale=1,user-scalable=no">
        <meta charset="utf8">
        <?php echo css_asset('bootstrap.min.css'); ?>
        <?php echo js_asset('jquery.min.js'); ?>
        <?php echo js_asset('bootstrap.min.js'); ?> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
   
      
    </head>

    <body>
        <div class="container">
        <br><br>
   
    <br><br>
    <div class="container">

        <form method="post" action="<?php echo site_url('register_std/contact');?>">
            <input type="text" name="std_id" value="<?php echo $std_id;?>">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <!-- input uname ใช้ javascript func-> CheckNum() ในการตรวจสอบ -->
                <input id="uname" type="email" class="form-control" name="email" placeholder="eamil" >
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input id="text" type="text" class="form-control" name="phone" placeholder="เบอร์โทรศัพท์">
            </div>
            <br>
            <div class="input-group">
            <span class="input-group-addon">
                <i class="fa fa-facebook-square" style="font-size:20px;color:navy"></i></span>
            
            <input id="text" type="text" class="form-control" name="facebook" placeholder="Fcebook">
            </div>
            <br>
             <div class="input-group">
            <span class="input-group-addon">
                <i class="fa fa-whatsapp" style="font-size:20px;color:green"></i></span>
            
            <input id="text" type="text" class="form-control" name="lineid" placeholder="Line ID">
            </div>
            <br><br>
            <center>
                <button type="submit" class="btn btn-success">&nbsp; ยืนยัน &nbsp;</button>
            </center>
        </form>

    </div>
    <br><br>
    <!-- ส่วนของปุ่ม ทำงานสมัครและลืมรหัสผ่าน -->
       </div>
        
</body>