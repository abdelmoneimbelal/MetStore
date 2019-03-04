<?php 
session_start();
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

		<style></style>
	</head>
<body>
    <div class="login">
    <h2 style="color:white; text-align:center;"><?php echo @$_GET['not_admin']; ?></h2>
    <h2 style="color:white; text-align:center;"><?php echo @$_GET['logged_out']; ?></h2>
        <h1>لوحة تحكم المدير</h1>
        <form method="post" action="login.php" style="font-family:JF Flat Regular">
            <input type="text" name="email" placeholder="البريد الالكترونى" required="required" />
            <input type="password" name="password" placeholder="كلمة السر" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large" name="login">تسجيل الدخول للوحة التحكم</button>
        </form>
    </div>
</body>
</html>

<?php 
    include("includes/db.php"); 
	if(isset($_POST['login'])){
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$pass = mysqli_real_escape_string($con, $_POST['password']);
        $sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";
        $run_user = mysqli_query($con, $sel_user); 
        $check_user = mysqli_num_rows($run_user); 
        if($check_user==1){
            $_SESSION['user_email']=$email; 
            echo "<script>window.open('index.php?logged_in=تم تسجيل الدخول بنجاح','_self')</script>";
        }
        else {
            echo "<script>alert('يوجد خطا فى البيانات ')</script>";
        }
	}
?>