<br>
<table width="795" align="center" bgcolor="pink">
    <tr align="center">
        <td colspan="6"><h2 style="    background-color: #eb010b;
    width: 350px;
    border-radius: 5px;
    /* float: right; */
    margin-bottom: 31px;
    color: #fff;
    font-size: 30px;">عرض العلامات التجارية </h2></td>
    </tr>
    <tr align="center" bgcolor="skyblue" style="font-family: JF Flat Regular ;">
        <th>رقم العلامة التجارية</th>
		<th>اسم العلامة التجارية</th>
		<th>تعديل العلامة التجارية</th>
		<th>حذف العلامة التجارية </th>
    </tr>
    <?php
    include("includes/db.php");
    $get_brand = "select * from brands";
    $run_brand = mysqli_query($con, $get_brand);
    $i = 0;
    while($row_brand=mysqli_fetch_array($run_brand)){
        $brand_id = $row_brand['brand_id'];
        $brand_title = $row_brand['brand_title'];
        $i++;
    ?>
    <tr align = "center"  style="font-family: JF Flat Regular ;">
        <td><?php echo $i; ?></td>
        <td><?php echo $brand_title; ?></td>
        <td><a href="index.php?edit_brand=<?php echo $brand_id; ?>">تعديل</a></td>
        <td><a href="delete_brand.php?delete_brand=<?php echo $brand_id;?>">حذف</a></td>
    </tr>
    <?php } ?>
</table>