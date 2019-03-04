<form action="" method="post" style="padding:80px;font-family: JF Flat Regular">
<h2 style="    background-color: #eb010b;
    width: 314px;
    border-radius: 5px;
    /* float: right; */
    margin-bottom: 31px;
    color: #fff;
    font-size: 30px;">إضافة تصنيف جديد</h2>

	<br>
    <input style="color:#fff" type="text" name="new_cat"  required/>
    <input type="submit" name="add_cat" value="اضافة التصنيف " />

</form>
<?php
    include("includes/db.php");
    if(isset($_POST['add_cat'])){
        $new_cat = $_POST['new_cat'];
        $insert_cat = "insert into categories (cat_title) values ('$new_cat')";
        $run_cat = mysqli_query($con, $insert_cat);
        if($run_cat){
            echo "<script>alert('شكرا لك تم اضافة التصنيف بنجاح')</script>";
            echo "<script>window.open('index.php?view_cats','_self')</script>";
           }
    }
?>
