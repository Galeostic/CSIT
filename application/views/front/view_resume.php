<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- เรียกการใช้งาน boostrap -->
   <?php echo css_asset('bootstrap.min.css');?>
  <?php echo js_asset('jquery.min.js');?>
 <?php echo js_asset('bootstrap.min.js');?> 
</head>
<body>
<div class="container">
    <center>
        <h2>Image student</h2>
    </center>
  
  <center>
      <?php echo image_asset('img_std/56003263035.jpg',null,array('width'=>140,'height'=>200));?>
      
  </center>

  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <h3><b> ประวัติส่วนตัว</b></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
        <h3><b>Contact</b></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
        <h3><b>Skill</b></h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

</body>
</html>
