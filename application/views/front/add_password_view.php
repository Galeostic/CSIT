<html>
    <title>Student Resume</title>
    <head><meta name=viewport content="width=device-width, initial-scale=1,user-scalable=no">
        <meta charset="utf8">
        <?php echo css_asset('bootstrap.min.css'); ?>
        <?php echo js_asset('jquery.min.js'); ?>
        <?php echo js_asset('bootstrap.min.js'); ?> 
        

      
    </head>

    <body>
        <div class="container">
        <br><br>
  

    <br><br>
    <div class="container">

        <form method="post" action="<?php echo site_url('register_std/add_password');?>">
            <input type="text" name="std_id" value="<?php echo $std_id;?>">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <!-- input uname ใช้ javascript func-> CheckNum() ในการตรวจสอบ -->
                <input id="uname" type="password" class="form-control" name="password" placeholder="รหัสผ่านในการใช้งาน" >
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" type="password" class="form-control" name="password_conf" placeholder="ยืนยันรหัสผ่าน">
            </div>
            <br>
            <center>
                <button type="submit" class="btn btn-success">&nbsp; LOGIN &nbsp;</button>
            </center>
        </form>

    </div>
    <br><br>
  
        </div>
</body>