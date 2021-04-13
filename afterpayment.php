<?php
include('configall.php');
$id=$_POST['id'];
if($id)
{
$sql="SELECT payment.year,payment.month,payment.pay_no,payment.emp_id,employee.Name,employee.bank_accno,payment.total_pay FROM `employee` INNER JOIN `payment` WHERE employee.Employee_id=payment.emp_id AND employee.Employee_id=$id;";
$result=mysqli_query($connection,$sql);
}
?>
<!DOCTYPE html>
<html>
<title>payment history</title>
<body>
<div class="w3-container">
<h4>Employee Data</h4>
<table>
<tr><th>Payment no</th>
<th>Year</th>
<th>month</th>
<th>Bank account no</th>
<th>Total salary</th>
<?php while($row=mysqli_fetch_array($result)) {?>
<tr>
<td><?php echo $row['pay_no']; ?></td>
<td><?php echo $row['year']; ?></td>
<td><?php echo $row['month']; ?></td>
<td><?php echo $row['bank_accno']; ?></td>
<td><?php echo $row['total_pay']; ?></td>
</tr> <?php } ?> </table></div>
</body>
</html>
