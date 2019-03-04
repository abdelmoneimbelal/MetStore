<?php
if (isset($_GET["register"])) {
	
	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<!-- Bootstrap -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<!-- Font Awesome  -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- Web Font  -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.min.js"></script>
		<title>مشروع التسويق الالكترونى</title>
		
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
								    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <img src="images/logo.png" width="150px" hieght=""	  />    
      </div>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
	<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>الصفحة الرئيسية </a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-th-large"></span>المنتجات</a></li>
	
				<li><a href="Tell.php"><span class="glyphicon glyphicon-earphone"></span>اتصل بنا </a></li>
			</ul>
			

		</div>
	</div>
</div>	
<br><br><br><br><br><br>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">تسجيل بيانات عميل جديد </div>
					<div class="panel-body">
					
					<form id="signup_form" onsubmit="return false">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">الاسم الاول</label>
								<input type="text" id="f_name" name="f_name" class="form-control" placeholder="الاسم الاول">
							</div>
							<div class="col-md-6">
								<label for="f_name">الاسم الثانى</label>
								<input type="text" id="l_name" name="l_name"class="form-control" placeholder="الاسم الثانى">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">الايميل</label>
								<input type="text" id="email" name="email"class="form-control" placeholder="الايميل">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">كلمة السر</label>
								<input type="password" id="password" name="password"class="form-control" placeholder="كلمة السر">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">تكرار كلمة السر</label>
								<input type="password" id="repassword" name="repassword"class="form-control" placeholder="تكرار كلمة السر">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">الموبايل</label>
								<input type="text" id="mobile" name="mobile"class="form-control" placeholder="الموبايل">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">العنوان</label>
								<input type="text" id="address1" name="address1"class="form-control" placeholder="العنوان">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">المحافظة</label>
								<input type="text" id="address2" name="address2"class="form-control" placeholder="المحافظة">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="width:100%;" value="التسجيل فى الموقع " type="submit" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
	<?php
}



?>






















