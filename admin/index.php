<?php
session_start();
if(!isset($_SESSION['user_email'])){
    echo "<script>window.open('login.php?not_admin=لست مدير الموقع ','_self')</script>";
}else{

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
		<title>لوحة التحكم</title>
		
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="styles/login_style.css" media="all" /> 
		<link rel="stylesheet" href="styles/style.css" media="all" />

		<style></style>
	</head>
<body>
<br>
        <div class="main_wrapper">
     
            <div id="right" ><br>
                    <div id="header">
			
			</div>
                    <a style="font-family: JF Flat Regular ; float : right" href="index.php?insert_product">اضافة منتج </a>
                    <a style="font-family: JF Flat Regular ; float : right" href="index.php?view_products">عرض المنتجات</a>
                    <a style="font-family: JF Flat Regular ; float : right" href="index.php?insert_cat">اضافة تصنيف </a>
                    <a style="font-family: JF Flat Regular ; float : right" href="index.php?view_cats">عرض جميع التصنيفات</a>
                    <a style="font-family: JF Flat Regular ; float : right" href="index.php?insert_brand">اضافة علامة تجارية</a>
                    <a style="font-family: JF Flat Regular ; float : right" href="index.php?view_brands">عرض العلامات التجارية </a>
                    <a style="font-family: JF Flat Regular ; float : right" href="index.php?view_customers">عرض العملاء </a>
                    <a style="font-family: JF Flat Regular ; float : right" href="index.php?view_orders">عرض الطلبيات</a>
                    <a style="font-family: JF Flat Regular ; float : right" href="logout.php">الخروج من لوحة التحكم</a>

            </div>
            <div id="left">
                
                <h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in'];?></h2>
                <?php
                    if(isset($_GET['insert_product'])){
                        include("insert_product.php");
                    }
                    if(isset($_GET['view_products'])){
                        include("view_products.php");
                    }
                    if(isset($_GET['edit_pro'])){
                        include("edit_pro.php");
                    }
                    if(isset($_GET['insert_cat'])){
                        include("insert_cat.php");
                    }
                    if(isset($_GET['view_cats'])){
                        include("view_cats.php");
                    }
                    if(isset($_GET['edit_cat'])){
                        include("edit_cat.php");
                    }
                    if(isset($_GET['insert_brand'])){
                        include("insert_brand.php");
                    }
                    if(isset($_GET['view_brands'])){
                        include("view_brands.php");
                    }
                    if(isset($_GET['edit_brand'])){
                        include("edit_brand.php");
                    }
                    if(isset($_GET['view_customers'])){
                        include("view_customers.php");
                    }
                    if(isset($_GET['view_orders'])){
                        include("view_orders.php");
                    }
                    if(isset($_GET['view_payments'])){
                        include("view_payments.php");
                    }
                ?>
            </div>
        </div>
    </body>
</html>
<?php
}
?>