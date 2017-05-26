<html lang="en">
    <head>
        <title>ระบบบันทึกภาพนักศึกษา</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--เป้นส่วนของการเรียกใช้ ไฟล์  css ,js ของ bootstrap จากภายในระบบทำให้ระบบไม่ต้องอาศัยการเรียกboostrap 
        จากภายนอก
        -->
        <?php echo css_asset('bootstrap.min.css'); ?>
        <?php echo js_asset('jquery.min.js'); ?>
        <?php echo js_asset('bootstrap.min.js'); ?> 
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script language="javascript">
            /* script java บังคับให้ผู้ใช้งานป้อนได้เฉพาะตัวเลขเท่านั้น
             * 
             */
            function CheckNum() {
                if (event.keyCode < 48 || event.keyCode > 57) {
                    event.returnValue = false;
                }
            }
       
            function CheckThai(str, obj) {
                var isThai = true;
                //สร้างตัวแปร str_thai เอาเฉพาะอักษรไม่เอาตัวเลขมาตรวจสอบ
                var str_thai = " ๅภถุึคตจขชๆไำพะัีรนยบลฃฟหกดเ้่าสวงผปแอิืทมใฝูฎฑธํ๊ณฯญฐฅฤฆฏโฌ็๋ษศซฉฮฺ์ฒฬฦ";
                var chk_text = str.split("");
                chk_text.filter(function (s) {
                    if (str_thai.indexOf(s) == -1) {
                        isThai = false;
                        obj.value = str.replace(RegExp(s, "g"), '');
                    }
                });
                return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด*/
            }
            //function check string recheck string number length std_id more 10 char
            
            function checkstd_id()
	{
		 if(document.frm_std.std_id.value.length < 11 || document.frm_std.std_id.value.length > 12)
		 {
			alert('รหัสนักศึกษามีความยาว [11 Character] .โปรดตรวจสอบ');
			return false;
		 }
	}
            
        </script>
    </head>
    <body>

        <div class="container">
            <h2 ><center>ข้อมูลเบื้องต้นนักศึกษา </center></h2>


            <form name="frm_std" action="<?php echo site_url('register_std/add_student'); ?>" method="post"  OnSubmit="return checkstd_id();">
                <div class="form-group-addon">
                    <label for="std_id">รหัสประจำตัวนักศึกษา:&#10024</label>

                    <input type="text" class="form-control" id="std_id" placeholder="รหัสประจำตัวนักศึกษา" name="std_id" onKeyPress="CheckNum()">

                </div>
                <div class="form-group">
                    <label for="std_fname">ชื่อนักศึกษา:&#10024</label>
                    <input type="text" class="form-control" id="std_fname" placeholder="ชื่อนักศึกษา(ภาษาไทยไม่ต้องใส่คำนำหน้าชื่อ)" name="std_fname" onKeyup="CheckThai(this.value, this)">
                </div>
                <div class="form-group">
                    <label for="std_lname">นามสกุลนักศึกษา:&#10024</label>
                    <input type="text" class="form-control" id="std_lname" placeholder="นามสกุลนักศึกษา(ภาษาไทย)" name="std_lname" onKeyup="CheckThai(this.value, this)">
                </div>
               
                <center>
                    <button type="submit" class="btn btn-primary">&nbsp;ยืนยัน&nbsp;</button>
                    &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;
                    <button type="reset" class="btn btn-danger">&nbsp;ยกเลิก&nbsp;</button>
                </center>
            </form>
        </div>

    </body>
</html>
