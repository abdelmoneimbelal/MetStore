<br>
<table width="795" align="center" bgcolor="pink">
    <tr align="center">
        <td colspan="6"><h2 style="    background-color: #eb010b;
    width: 314px;
    border-radius: 5px;
    /* float: right; */
    margin-bottom: 31px;
    color: #fff;
    font-size: 30px;">عرض جميع التصنيفات</h2></td>
    </tr>
    <tr align="center" bgcolor="skyblue" style="font-family: JF Flat Regular ;">
        <th>رقم التصنيف</th>
		<th>عنوان التصنيف</th>
		<th>تعديل التصنيف</th>
		<th>مسح التصنيف</th>
    </tr>
    <?php
    include("includes/db.php");
    $get_cat = "select * from categories";
    $run_cat = mysqli_query($con, $get_cat);
    $i = 0;
    while($row_cat=mysqli_fetch_array($run_cat)){
        $cat_id = $row_cat['cat_id'];
        $cat_title = $row_cat['cat_title'];
        $i++;
    ?>
    <tr align = "center" style="font-family: JF Flat Regular ;">
        <td><?php echo $i; ?></td>
        <td><?php echo $cat_title; ?></td>
        <td><a href="index.php?edit_cat=<?php echo $cat_id; ?>">تعديل</a></td>
        <td><a href="delete_cat.php?delete_cat=<?php echo $cat_id;?>">حذف</a></td>
    </tr>
    <?php } ?>
</table>