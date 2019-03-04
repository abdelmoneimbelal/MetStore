<br>
<table width="795" align="center" bgcolor="pink"> 

	
	<tr align="center" >
		<td colspan="6"><h2 style="    background-color: #eb010b;
    width: 314px;
    border-radius: 5px;
    /* float: right; */
    margin-bottom: 31px;
    color: #fff;
    font-size: 30px;"> عرض الطلبيات</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue" style="font-family: JF Flat Regular ;">
		<th>رقم الطلب</th>
		<th>ايميل العميل</th>
		<th>صورة المنتج</th>
		<th>الكمية</th>
		<th>رقم الفاتورة</th>
		<th>حالة الطلب </th>
	</tr>
	<?php 
	include("includes/db.php");
	$get_order = "select * from orders";
	$run_order = mysqli_query($con, $get_order); 
	$i = 0;
	while ($row_order=mysqli_fetch_array($run_order)){
		$order_id = $row_order['order_id'];
		$qty = $row_order['qty'];
		$pro_id = $row_order['product_id'];
		$c_id = $row_order['user_id'];
		$invoice_no = $row_order['trx_id'];
		$order_date = $row_order['p_status'];
		$i++;
		
		$get_pro = "select * from products where product_id='$pro_id'";
		$run_pro = mysqli_query($con, $get_pro); 
		
		$row_pro=mysqli_fetch_array($run_pro); 
		
		$pro_image = $row_pro['product_image']; 
		$pro_title = $row_pro['product_title'];
		
		$get_c = "select * from user_info where user_id='$c_id'";
		$run_c = mysqli_query($con, $get_c); 
		
		$row_c=mysqli_fetch_array($run_c); 
		
		$c_email = $row_c['email'];
	
	?>
	<tr align="center" style="font-family: JF Flat Regular ;" >
		<td><?php echo $i;?></td>
		<td><?php echo $c_email; ?></td>
		<td>
		<?php echo $pro_title;?><br>
		<img src="product_images/<?php echo $pro_image;?>" width="50" height="50" />
		</td>
		<td><?php echo $qty;?></td>
		<td><?php echo $invoice_no;?></td>
		<td><?php echo $order_date;?></td>
	
	</tr>
	<?php } ?>
</table>