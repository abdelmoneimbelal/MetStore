<?php 
include("includes/db.php"); 
if(isset($_GET['edit_brand'])){
	$brand_id = $_GET['edit_brand']; 
	$get_brand = "select * from brands where brand_id='$brand_id'";
	$run_brand = mysqli_query($con, $get_brand); 
	$row_brand = mysqli_fetch_array($run_brand); 
	$brand_id = $row_brand['brand_id'];
	$brand_title = $row_brand['brand_title'];
}
?>
<form action="" method="post" style="padding:80px; font-family: JF Flat Regular ;">
    <h2 style="    background-color: #eb010b;
    width: 314px;
    border-radius: 5px;
    /* float: right; */
    margin-bottom: 31px;
    color: #fff;
    font-size: 30px;">تعديل العلامة التجارية </h2>
    <input type="text" name="new_brand" value="<?php echo $brand_title;?>"/> 
    <input type="submit" name="update_brand" value="تعديل العلامة التجارية " /> 

</form>
<?php 
	if(isset($_POST['update_brand'])){
	$update_id = $brand_id;
	$new_brand = $_POST['new_brand'];
	$update_brand = "update brands set brand_title='$new_brand' where brand_id='$update_id'";
	$run_brand = mysqli_query($con, $update_brand); 
	if($run_brand){
	
	   echo "<script>alert(' تم تعديل العلامة التجارية بنجاح ')</script>";
	   echo "<script>window.open('index.php?view_brands','_self')</script>";
	   }
	}
?>