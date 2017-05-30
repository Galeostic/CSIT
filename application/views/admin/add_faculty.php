<!DOCTYPE html>
<html lang="en">
<head>
  <title>add faculty</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
        <?php echo css_asset('bootstrap.min.css'); ?>
        <?php echo js_asset('jquery.min.js'); ?>
        <?php echo js_asset('bootstrap.min.js'); ?> 
</head>
<body>

<div class="container">
  <h2>เพิ่มคณะ</h2>
  <form class="form-horizontal" action="admin/add_fac" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="fac_id">เพิ่มรหัสคณะ:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fac_name" placeholder="เพิ่มรหัสคณะ" name="fac_id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="fac_name">เพิ่มชื่อคณะ:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="fac_name" placeholder="เพิ่มชื่อคณะ" name="fac_name">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">เพิ่มคณะ</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>