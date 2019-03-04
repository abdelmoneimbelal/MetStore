<br>
<table width="795" align="center" bgcolor="pink">
    <tr align="center">
        <td colspan="6"><h2 style="    background-color: #eb010b;
    width: 314px;
    border-radius: 5px;
    /* float: right; */
    margin-bottom: 31px;
    color: #fff;
    font-size: 30px;"> عرض العملاء</h2></td>
    </tr>
    <tr align="center" bgcolor="skyblue" style="font-family: JF Flat Regular ;">
        <th>رقم العميل</th>
        <th>اسم العميل</th>
        <th>الايميل</th>
        <th>رقم التيفون</th>
        <th>مسح العميل </th>
    </tr>
    <?php
    include("includes/db.php");
    $get_c = "select * from user_info";
    $run_c = mysqli_query($con, $get_c);
    $i = 0;
    while($row_c=mysqli_fetch_array($run_c)){
        $c_id = $row_c['user_id'];
        $c_name = $row_c['first_name'];
        $c_last = $row_c['last_name'];
        $c_email = $row_c['email'];
        $c_image = $row_c['mobile'];
        $i++;
    ?>
    <tr align = "center" style="font-family: JF Flat Regular ;">
        <td><?php echo $i; ?></td>
        <td><?php echo $c_name; ?> <?php echo $c_name; ?></td>
        <td><?php echo $c_email; ?></td>
        <td><?php echo $c_image; ?></td>
        <td><a href="delete_c.php?delete_c=<?php echo $c_id;?>">مسح العميل</a></td>
    </tr>
    <?php } ?>
</table>