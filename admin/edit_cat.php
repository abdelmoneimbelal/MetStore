<?php 
include("includes/db.php"); 
if(isset($_GET['edit_cat'])){
	$cat_id = $_GET['edit_cat']; 
	$get_cat = "select * from categories where cat_id='$cat_id'";
	$run_cat = mysqli_query($con, $get_cat); 
	$row_cat = mysqli_fetch_array($run_cat); 
	$cat_id = $row_cat['cat_id'];
	$cat_title = $row_cat['cat_title'];
}
?>
<form action="" method="post" style="padding:80px ;font-family: JF Flat Regular ;">
    <h2 style="    background-color: #eb010b;
    width: 250px;
    border-radius: 5px;
    /* float: right; */
    margin-bottom: 31px;
    color: #fff;
    font-size: 30px;">تعديل التصنيف</h2>
    <input type="text" name="new_cat" value="<?php echo $cat_title;?>"/> 
    <input type="submit" name="update_cat" value="تعديل البيانات" /> 

</form>
<?php 
	if(isset($_POST['update_cat'])){
	$update_id = $cat_id;
	$new_cat = $_POST['new_cat'];
	$update_cat = "update categories set cat_title='$new_cat' where cat_id='$update_id'";
	$run_cat = mysqli_query($con, $update_cat); 
	if($run_cat){
	
	   echo "<script>alert(' تم تعديل بيانات التصنيف بنجاح')</script>";
	   echo "<script>window.open('index.php?view_cats','_self')</script>";
	   }
	}
?>