<br>
<table width="795" align="center" bgcolor="pink">
    <tr align="center">
                 <td colspan="4"><h2 style="    background-color: #eb010b;
    width: 314px;
    border-radius: 5px;
    /* float: right; */
    margin-bottom: 31px;
    color: #fff;
    font-size: 30px;">عرض المنتجات</h2></td>
    </tr>
    <tr align="center" bgcolor="skyblue" style="font-family: JF Flat Regular ;">
        <th>رقم المنتج</th>
        <th>العنوان</th>
        <th>صورة المنتج</th>
        <th>السعر</th>
        <th>تعديل</th>
        <th>مسح</th>
    </tr>
    <?php
    include("includes/db.php");
    $get_pro = "select * from products";
    $run_pro = mysqli_query($con, $get_pro);
    $i = 0;
    while($row_pro=mysqli_fetch_array($run_pro)){
        $pro_id = $row_pro['product_id'];
        $pro_title = $row_pro['product_title'];
        $pro_image = $row_pro['product_image'];
        $pro_price = $row_pro['product_price'];
        $i++;
    ?>
    <tr align = "center" style="font-family: JF Flat Regular ;">
        <td><?php echo $i; ?></td>
        <td><?php echo $pro_title; ?></td>
        <td><img src="product_images/<?php echo $pro_image;?>" width="60" height="60"/></td>
        <td><?php echo $pro_price; ?></td>
        <td><a href="index.php?edit_pro=<?php echo $pro_id; ?>">تعديل</a></td>
        <td><a href="delete_pro.php?delete_pro=<?php echo $pro_id;?>">مسح</a></td>
    </tr>
    <?php } ?>
</table>