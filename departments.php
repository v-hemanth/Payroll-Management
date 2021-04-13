<?php
include('configall.php');
$sql="SELECT * FROM department;";
$result=mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html>
<title>Department Data</title>
<body>
<div class="w3-container">
<h4>Department Data</h4>
<a href="department-add.php" class="w3-button w3-blue w3-right">Add Department <span class="w3-text-red">+</span></a>
<table>
<tr><th>Department id</th><th>Department Name</th><th colspan="2">Action</th></tr>
<?php while($row=mysqli_fetch_array($result)) {?>
<tr>
<td><?php echo $row['Depart_id']; ?></td>
<td><?php echo $row['Depart_name']; ?></td>
<td><a href="dep-deletephp.php?del=<?php echo $row['Depart_id']; ?>" class="w3-button w3-red">Delete</a></td>
</tr>
<?php } ?>
</table>
</div>
</body></html>
