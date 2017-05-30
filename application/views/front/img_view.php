<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name=viewport content="width=device-width, initial-scale=1,user-scalable=no">
        <meta charset="utf8">
        <?php echo css_asset('bootstrap.min.css'); ?>
        <?php echo js_asset('jquery.min.js'); ?>
        <?php echo js_asset('bootstrap.min.js'); ?> 
  <style>
  .bg-1 { 
      background-color: #808080; /* Green */
      color: #fff33;
  }
  </style>
</head>
<body>

<div class="bg-1">
  <div class="container text-center">
    <h3>Who Am I?</h3>
     <?php echo image_asset('img_std/'.$id[0]->path_img,null,array('width'=>250,'height'=>350));?>
    <h3>I'm an adventurer</h3>
    <form method="post" action="<?php echo site_url('fac_cl/get_fac'); ?>">
              ชื่อ-นามสกุล:<?php echo $id[0]->std_fname." ".$id[0]->std_lname;?>
              <br>
              
              รหัสประจำตัว: <?php echo $id[0]->std_id;?>
              <input type="hidden" name="std_id" value="<?php echo $id[0]->std_id;?>">
                
                <div class="form-group" >              
                </div>
                <br>
                <center>
                    <button type="submit" class="btn btn-success">&nbsp; ยืนยัน &nbsp;</button>
                </center>
            </form>
  </div>
</div>

</body>
</html>
