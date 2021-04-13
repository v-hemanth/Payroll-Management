<?php
include('configall.php');
$month=$_POST['month'];
$year=$_POST['year'];
if($month)
{
$sql="SELECT payment.pay_no,payment.emp_id,employee.Name,employee.bank_accno,payment.total_pay FROM `employee` INNER JOIN `payment` WHERE employee.Employee_id=payment.emp_id AND month='$month' AND year='$year';";
$result=mysqli_query($connection,$sql);
}
?>
<!DOCTYPE html>
</html>
<title>Employee Data</title>
<body>
<div class="w3-container">
<h4>Employee Data</h4>
<table>
<tr><th>Payment no</th>
<th>Employee id</th>
<th>Name</th>
<th>Bank account no</th>
<th>Total salary</th>
<?php while($row=mysqli_fetch_array($result)) {?>
<tr>
<td><?php echo $row['pay_no']; ?></td>
<td><?php echo $row['emp_id']; ?></td>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['bank_accno']; ?></td>
<td><?php echo $row['total_pay']; ?></td>
</tr>
<?php } ?>
</table>
</div>
<body>
</html>
