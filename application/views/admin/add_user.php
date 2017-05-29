<!DOCTYPE html>
<html lang="en">
    <head> 
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style type="text/css"> 
// CSS
body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	background-color: #d3d3d3;
 	font-family: 'Oxygen', sans-serif;
}

.main{
 	margin-top: 70px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}
                </style>
                
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
                     <?php echo css_asset('bootstrap.css'); ?>
                  <?php echo css_asset('main.css'); ?>
		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin</title>
	</head>
  <body>      
<center>
    <!--box ให้กรอกข้อมูล -->
<div class="container">
            <div class="row main">
	<div class="panel-heading">
	           <div class="panel-title text-center">
	               	<h1 class="title">Hello Admin</h1>
	               	<hr />
	            </div>
	  </div> 
            <div class="main-login main-center">
	<form class="form-horizontal" method="post" action="#">
            
<div class="form-group">
<label for="username" class="cols-sm-2 control-label">Username</label>
        
            <div class="cols-sm-10">
	<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
	<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
	</div>
            </div>
</div>

            <div class="form-group">
	<label for="password" class="cols-sm-2 control-label">Password</label>
	<div class="cols-sm-10">
                                    <div class="input-group">
		<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
		<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                                    </div>
	</div>
            </div>

<div class="form-group">
	<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
		<div class="cols-sm-10">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
			<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
		</div>
	</div>
</div>
<!--botton regieter -->
<div class="form-group ">
	 <a href="<?php echo site_url('admin/add_admin'); ?>"> <button type="button" class="btn btn-primary btn-lg btn-block login-button">Register</button>
</div>
<!--botton login -->
<div class="form-group ">
	 <a href="<?php echo site_url('login/index'); ?>"> <button type="button" class="btn btn-primary btn-lg btn-block login-button">Login</button>
</div>
</div>
</form>
</div>
</div>
</div>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
 </center>
</body>
</html>
