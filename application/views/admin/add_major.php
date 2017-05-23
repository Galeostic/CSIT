<html>
    <title>Student Resume</title>
    <head><meta name=viewport content="width=device-width, initial-scale=1,user-scalable=no">
        <meta charset="utf8">
        <?php echo css_asset('bootstrap.min.css'); ?>
        <?php echo js_asset('jquery.min.js'); ?>
        <?php echo js_asset('bootstrap.min.js'); ?> 

    </head>

    <body>


        <br><br>
        <div class="container">
            <center>
                <h2>เพิ่มสาขาวิชา</h2>
            </center>

            <form method="post" action="<?php echo site_url(''); ?>">

                <div class="form-group" >


                    <select class="form-control" id="fac_id" name="fac_id"  >
                        <option>--เลือกคณะ--</option>
                        <!-- ทำการวนลูบจากการส่งข้อมูลมาของfac_cl จาตาราง faculty -->
                        <?php foreach ($rs->result() as $value) : ?>

                            <option value="<?php echo $value->fac_id; ?> "><?php echo $value->fac_name; ?></option>
                        <?php endforeach ?>  
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="major_id">เพิ่มรหัสสาขาวิชา:</label>
                    <div class="col-sm-10">          
                        <input type="text" class="form-control" id="major_id" placeholder="รหัสสาขาวิชา" name="major_id">
                    </div>
                </div>         
                <div class="form-group">
                    <label class="control-label col-sm-2" for="major_name">เพิ่มชื่อสาขาวิชา:</label>
                    <div class="col-sm-10">          
                        <input type="text" class="form-control" id="major_name" placeholder="ชื่อสาขาวิชา" name="major_name">
                    </div>
                </div>
                <br>
                <center>
                    <button type="submit" class="btn btn-success">&nbsp; ยืนยัน &nbsp;</button>
                </center>
            </form>

        </div>
        <br><br>


    </div>
</body>