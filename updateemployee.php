<?php include('configall.php')
$sql="SELECT Employee_id,Name,Email,salary,loan,jobtitle,Depart_id,pfund FROM `employee`;";
$result=mysqli_query($connection,$sql);
if(isset($_GET['edit'])){
$id = $_GET['edit'];
echo $id;
$rec = mysqli_query($connection, "SELECT * FROM employee WHERE Employee_id=$id;");
$record=mysqli_fetch_array($rec);
$name=$record['Name'];
$dob=$record['dob'];
$gender=$record['gender'];
$sdate=$record['Start_date'];
$email=$record['Email'];
$phone=$record['Phone_no'];
$loan=$record['loan'];
$pfund=$record['p_fund'];
$jobtitle=$record['jobtitle'];
$address=$record['Address'];
$depid=$record['Depart_id'];
if($record['managesDepart_id']==null)
{
$manid=0;
}
else
{
$manid=$record['managesDepart_id'];
}
$bacc=$record['bank_accno'];
}
?>
<!DOCTYPE html>
<html>
<title>Update Employee</title>
<body>
<div class="w3-container" style="padding: 50px 200px 20px 200px">
<form class="w3-container" action="em-updatephp.php" method="post">
<p>
<input class="w3-input w3-light-grey w3-animate-input" type="hidden" name="empid" value="<?php echo $id;?>"></p>
<p>
<label>Name</label>
<input class="w3-input w3-light-grey w3-animate-input" type="text" name="name" value="<?php echo $name;?>">
</p>
<p>
<label>Date of Birth</label>
<input class="w3-input w3-light-grey w3-animate-input" type="date" name="dob" value="<?php echo $dob;?>">
</p>
<p>
<label>Gender</label><br>
<?php
if ($gender=='male')
{
?><input type="radio" name="gender" value="male" checked> Male
<input type="radio" name="gender" value="female"> Female<br></p>
<?php
}else
{
?>
<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female" checked> Female<br></p><?php
}
?>
</p>
<p>
<label>Joining date</label>
<input class="w3-input w3-light-grey w3-animate-input" type="date" name="sdate" value="<?php echo $sdate;?>">
</p>
<p>
<label>Email</label>
<input class="w3-input w3-light-grey w3-animate-input" type="email" name="email" value="<?php echo $email;?>"></p>
<p>
<label>Phone</label>
<input class="w3-input w3-light-grey w3-animate-input" type="text" name="phone" value="<?php echo $phone;?>"></p>
<p>
<label>Loan</label>
<input class="w3-input w3-light-grey w3-animate-input" type="number" name="loan" value="<?php echo $loan;?>"></p>
<p>
<label>Provident fund
</label>
<input class="w3-input w3-light-grey w3-animate-input" type="number" name="pfund" value="<?php echo $pfund;?>"></p>
<p><label>Bank Account No</label>
<input class="w3-input w3-light-grey w3-animate-input" type="number" name="bacc" value="<?php echo $bacc;?>"></p>
<label>Jobtitle</label>
<?php
if ($jobtitle=='executive')
{
?> <select class="w3-input w3-light-grey w3-animate-input" name="jobtitle">
<option value="executive">Executive</option>
<option value="manager">Manager</option>
<option value="director">Director</option>
<option value="accountant">Accountant</option>
<option value="chief">Chief</option></select>
<?php
}else if($jobtitle=='manager')
{
?>
<select class="w3-input w3-light-grey w3-animate-input" name="jobtitle">
<option value="executive">Executive</option>
<option value="manager" selected>Manager</option>
<option value="director">Director</option>
<option value="accountant">Accountant</option>
<option value="chief">Chief</option></select>
<?php
}else if($jobtitle=='director')
{
?>
<select class="w3-input w3-light-grey w3-animate-input" name="jobtitle">
<option value="executive">Executive</option>
<option value="manager">Manager</option>
<option value="director" selected>Director</option>
<option value="accountant">Accountant</option>
<option value="chief">Chief</option></select>
<?php
}else if($jobtitle=='chief')
{
?>
<select class="w3-input w3-light-grey w3-animate-input" name="jobtitle">
<option value="executive">Executive</option>
<option value="manager">Manager</option>
<option value="director">Director</option>
<option value="accountant">Accountant</option>
<option value="chief" selected>Chief</option></select>
<?php
}else
{
?> <select class="w3-input w3-light-grey w3-animate-input" name="jobtitle">
<option value="executive">Executive</option>
<option value="manager">Manager</option>
<option value="director">Director</option>
<option value="accountant" selected>Accountant</option>
<option value="chief">Chief</option></select>
<?php
}
?>
<p>
<label>Address</label>
<input class="w3-input w3-light-grey w3-animate-input" type="text" name="address" value="<?php echo $address;?>">
</p>
<p><label>Employee Department</label>
<input class="w3-input w3-light-grey w3-animate-input" type="number" name="depid" value="<?php echo $depid;?>"></p>
<p><label>Managing Department</label>
<input class="w3-input w3-light-grey w3-animate-input" type="number" name="manid" value="<?php echo $manid;?>"></p>
<input type="submit" value="Update" class="w3-input w3-green w3-round-xxlarge w3-animate-input w3-hover-blue">
</form>
</div>
</div>
</body>
</html>
