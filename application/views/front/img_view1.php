<!DOCTYPE html>
<html>
    <title>Student Resume</title>
    <head><meta name=viewport content="width=device-width, initial-scale=1,user-scalable=no">
        <meta charset="utf8">
        <?php echo css_asset('bootstrap.min.css'); ?>
        <?php echo js_asset('jquery.min.js'); ?>
        <?php echo js_asset('bootstrap.min.js'); ?> 

    </head>

    <body>
    <center><h2> ทดสอบหน้า แสดงรูป</h2> </center>
        
        <br><br>
      
        <div class="container">
       
 
            <center>
                 <?php echo image_asset('img_std/'.$id[0]->path_img,null,array('width'=>140,'height'=>200));?>
           
         
            <form method="post" action="<?php echo site_url('fac_cl/get_fac'); ?>">
              ชื่อ-นามสกุล:<?php echo $id[0]->std_fname." ".$id[0]->std_lname;?>
              <br>
              
              รหัสประจำตัว:  <input type="text" name="std_id" value="<?php echo $id[0]->std_id;?>">
                
                <div class="form-group" >
                    
                   
                  
                
                </div>
                <br>
                <center>
                    <button type="submit" class="btn btn-success">&nbsp; ยืนยัน &nbsp;</button>
                </center>
            </form>
            </center>
        </div>
        <br><br>


    </div>
</body>