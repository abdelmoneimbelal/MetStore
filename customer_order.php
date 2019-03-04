<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
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
		
				<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
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
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>المنتجات</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-heart"></span>فريق العمل </a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-star"></span>فكرة المشروع</a></li>
				<li><a href="tell.php"><span class="glyphicon glyphicon-earphone"></span>اتصل بنا </a></li>
			</ul>
		</div></div></div>
					<ul class="nav navbar-nav navbar-right">
	
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "مرحبا بك ".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">                                                                                                           
						<li><a href="cart.php" style="text-decoration:none; color:blue;"><span >سلة التسوق</a></li>
						<li class="divider"></li>
						<li><a href="customer_order.php" style="text-decoration:none; color:blue;">طلبياتى</a></li>
						<li class="divider"></li>
						<li class="divider"></li>
						<li><a href="logout.php" style="text-decoration:none; color:blue;">تسجيل الخروج </a></li>
					</ul>
				</li>
				
			</ul>
		</div>
		
	</div>
	</div><br/><br/><br/><br/><br/><br/>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
	
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>الطلبيات التى تم شرائها</h1>
						<hr/>
						<?php
							include_once("db.php");
							$user_id = $_SESSION["uid"];
							$orders_list = "SELECT o.order_id,o.user_id,o.product_id,o.qty,o.trx_id,o.p_status,p.product_title,p.product_price,p.product_image FROM orders o,products p WHERE o.user_id='$user_id' AND o.product_id=p.product_id";
							$query = mysqli_query($con,$orders_list);
							if (mysqli_num_rows($query) > 0) {
								while ($row=mysqli_fetch_array($query)) {
									?>
										<div class="row">
											<div class="col-md-6">
												<img style="float:right;" src="product_images/<?php echo $row['product_image']; ?>" class="img-responsive img-thumbnail"/>
											</div>
											<div class="col-md-6">
												<table>
													<tr><td>اسم المنتج</td><td><b><?php echo $row["product_title"]; ?></b> </td></tr>
													<tr><td>سعر المنتج</td><td><b><?php echo "$ ".$row["product_price"]; ?></b></td></tr>
													<tr><td>الكمية</td><td><b><?php echo $row["qty"]; ?></b></td></tr>
													<tr><td>عملية الدفع </td><td><b><?php echo $row["trx_id"]; ?></b></td></tr>
												</table>
											</div>
										</div>
									<?php
								}
							}
						?>
						
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
















































