<form action="" method="post" style="padding:80px ; font-family: JF Flat Regular ;">
 <h2 style="    background-color: #eb010b;
    width: 250px;
    border-radius: 5px;
    /* float: right; */
    margin-bottom: 31px;
    color: #fff;
    font-size: 30px;">اضافة علامة تجارية </h2>
    <input type="text" name="new_brand" required/>
    <input type="submit" name="add_brand" value="اضافة علامة تجارية " />

</form>
<?php
    include("includes/db.php");
    if(isset($_POST['add_brand'])){
        $new_brand = $_POST['new_brand'];
        $insert_brand = "insert into brands (brand_title) values ('$new_brand')";
        $run_brand = mysqli_query($con, $insert_brand);
        if($run_brand){
            echo "<script>alert('تمت اضافة العلامة التجارية بنجاح')</script>";
            echo "<script>window.open('index.php?view_brands','_self')</script>";
           }
    }
?>
