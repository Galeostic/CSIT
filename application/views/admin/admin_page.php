<html>
    <title>Home Admin</title>
<head>
    <meta name=viewport content="width=device-width, initial-scale=1,user-scalable=no">
        <meta charset="utf8">
        <?php echo css_asset('bootstrap.min.css'); ?>
        <?php echo js_asset('jquery.min.js'); ?>
        <?php echo js_asset('bootstrap.min.js'); ?> 
        <!-- ลิงค์ของ icon-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!-- -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
 </head>
<body>
    <br>
    <br>
     <center><h1>WELCOME ADMIN</h1></center>
    <br>
    <br>
    <br>
<div class="container">
<!--User -->
 <div class="column">
        <center>
            <div class="col-lg-4 col-sm-6 text-center"> 
            <i class="fa fa-user-plus" style="font-size:250px;color:red"></i><!--icon ขนาด สี -->
            <a href="<?php echo site_url('call/page_user'); ?>"><!-- ลิงค์ไปหน้าadd_user-->
            <h2>User</h2></a>
           </div>
        </center>
 </div>
    <!--Faculty-->
<div class="column">
        <center>
            <div class="col-lg-4 col-sm-6 text-center"> 
            <i class="glyphicon glyphicon-education" style="font-size:250px;color:red"></i>
            <a href="<?php echo site_url('call/page_show_fac'); ?>">
                <h2>Faculty</h2></a>
            </div>
         </center>
</div>
  <!--Report -->
   <div class="column">
       <center> 
           <div class="col-lg-4 col-sm-6 text-center">
           <i  class="fa fa-pie-chart " style="font-size:250px;color: red"></i>
           <a href="<?php echo site_url('call/page_report'); ?>">
           <h2>Report</h2></a>
            </div> 
     </center>
   </div>

</div>
</body>
</html>
