<!DOCTYPE html>
<html>
    <title>Student Resume</title>
    <head><meta name=viewport content="width=device-width, initial-scale=1,user-scalable=no">
        <meta charset="utf8">
        <?php echo css_asset('bootstrap.min.css'); ?>
        <?php echo js_asset('jquery.min.js'); ?>
        <?php echo js_asset('bootstrap.min.js'); ?> 
        
     <script language="javascript">
            /* script java บังคับให้ผู้ใช้งานป้อนได้เฉพาะตัวเลขเท่านั้น
             * 
             */
            function CheckNum() {
                if (event.keyCode < 48 || event.keyCode > 57) {
                    event.returnValue = false;
                }
            }
       
        
            //function check string recheck string number length std_g_id more 10 char
            
            function checkid()
	{
		 if(document.frm_id.std_g_id.value.length < 10 || document.frm_id.std_g_id.value.length > 11)
		 {
			alert('รหัสนักกลุ่มเรียนมีความยาว [10 Character] .โปรดตรวจสอบ');
			return false;
		 }
	}
            
        </script>
    </head>

    <body>


        <br><br>
        <div class="container">
            <center>
                <h2>เลือกสาขาวิชาที่เรียน</h2>
            </center>

            <form name="frm_id" method="post" action="<?php echo site_url('register_std/add_major'); ?>" OnSubmit="return checkid();">

                <div class="form-group" >
                    <input type="text" name="std_id" value="<?php echo $id; ?>">

                    <select class="form-control" id="major_id" name="major_id" >
                        <option>--เลือกสาขาวิชาที่เรียน--</option>
                        <!-- ทำการวนลูบจากการส่งข้อมูลมาของfac_cl จาตาราง faculty -->
                        <?php foreach ($rs->result() as $value) : ?>

                            <option value="<?php echo $value->major_id; ?> "><?php echo $value->major_name; ?></option>
                        <?php endforeach ?>  

                    </select>

                </div>
                <br>
                <div class="form-group">
                    <label for="std_g_id">รหัสกลุ่มเรียน:&#10024</label>

                    <input type="text" class="form-control" id="std_g_id" placeholder="รหัสกลุ่มเรียน" name="std_g_id" onKeyPress="CheckNum()" >
                </div>
                <center>
                    <button type="submit" class="btn btn-success">&nbsp; ยืนยัน &nbsp;</button>
                </center>
            </form>

        </div>
        <br><br>


    </div>
</body>