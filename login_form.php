<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
if (isset($_SESSION["uid"])) {
	header("location:profile.php");
}
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
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
    <img src="images/logo.png" width="150px" hieght=""	  />      </div>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
	<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>الصفحة الرئيسية </a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-th-large"></span>المنتجات</a></li>
	
				<li><a href="Tell.php"><span class="glyphicon glyphicon-earphone"></span>اتصل بنا </a></li>
			</ul>
		</div>
	</div>
	</div> <br><br><br><br><br><br><br><br>
	
	<div class="container-fluid" style="margin-right:150px">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-8"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">تسجيل الدخول </div>
					<div class="panel-body">
						<!--User Login Form-->
						<form onsubmit="return false" id="login">
							<label for="email">البريد الالكتروني</label>
							<input type="email" class="form-control" name="email" id="email" required/>
							<label for="email">كلمة السر</label>
							<input type="password" class="form-control" name="password" id="password" required/>
							<p><br/></p>
							
							<!--If user dont have an account then he/she will click on create account button-->
							<div><a href="customer_registration.php?register=1">إنشاء حساب جديد </a>
							
							</div>	
							<br>
							<input type="submit" class="btn btn-success" style="float:right;" Value="تسجيل الدخول ">							
						</form>
				</div>
				<div class="panel-footer"><div id="e_msg"></div></div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>

</body>
</html>






















