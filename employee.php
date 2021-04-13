<?php include('configall.php')?>
<!DOCTYPE html>
<html>
<title>Employee Data</title>
<body>
<div class="w3-container">
<h4>Employee Data</h4>
<a href="employee-add.php" class="w3-button w3-blue w3-right">Add employee <span class="w3-text-red">+</span></a>
<br><br>
<table>
<tr><th>Employee id</th>
<th>Name</th>
<th>Address</th>
<th>Email</th>
<th>Phone Number</th>
<th>Gender</th>
<th>Job title</th>
<th>Salary</th>
<th>Loan</th>
<th>Provident fund</th>
<th>Bank Number</th>
<th>Start Date</th>
<th>Date of Birth</th>
<th>Department</th>
<th>Managing Department</th>
<th colspan="2">Action</th></tr>
<?php $sql="SELECT employee.*,job.basic_salary FROM employee INNER JOIN job where employee.jobtitle=job.Job_Title;";
$result=mysqli_query($connection,$sql);
while($row=mysqli_fetch_array($result)) {?>
<tr>
<td><?php echo $row['Employee_id']; ?></td>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['Address']; ?></td>
<td><?php echo $row['Email']; ?></td>
<td><?php echo $row['Phone_no']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['jobtitle']; ?></td>
<td><?php echo $row['basic_salary']; ?></td>
<td><?php echo $row['loan']; ?></td>
<td><?php echo $row['p_fund']; ?></td>
<td><?php echo $row['bank_accno'];?></td>
<td><?php echo $row['Start_date']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['Depart_id']; ?></td>
<td><?php
if ($row['managesDepart_id']==null)
{
echo '--';
}
else
{
echo $row['managesDepart_id'];
}?>
</td>
<td><a href="employee-update.php?edit=<?php echo $row['Employee_id']; ?>" class="w3-button w3-teal" >Edit</a></td>
<td><a href="emp-up-deletephp.php?del=<?php echo $row['Employee_id']; ?>" class="w3-button w3-red">Delete</a></td>
</tr>
<?php } ?>
</table>
</div>
</div>
</body>
</html>
