<?php
include('configall.php');
if(isset($_POST["submit"]))
{
$absence=$_POST["absence"];
$loan_cut=0;
$pfund_cut=0;
$overtime=$_POST["overtime"];
$sbonus=$_POST["sbonus"];
$medi_allow=0;
$house_allow=0;
$month=$_POST["month"];
$year=$_POST["year"];
$empid=$_POST["empid"];
$obonus=$_POST["obonus"];
$total=0;
$sql="SELECT * FROM `employee` INNER JOIN `job` WHERE employee.jobtitle=job.Job_Title and employee.Employee_id='$empid';";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($result);
$name=$row['Name'];
$job=$row['jobtitle'];
$medi_allow = $row['basic_salary']*0.03;
$house_allow = $row['basic_salary']*0.08;
$loan_cut = $row['loan']*0.05;
$up_loan=$row['loan']-$loan_cut;
$pfund_cut = $row['basic_salary']*0.025;
$gain = $overtime*300+$sbonus+$obonus+$row['basic_salary']+$medi_allow+$house_allow;
$cut = $loan_cut+$absence*200+$pfund_cut;
$total = $gain-$cut;
$up_fund=$row['p_fund']+$pfund_cut;
$sql3="SELECT MAX(pay_no) AS payid FROM payment;";
$result3=mysqli_query($connection,$sql3);
$row3=mysqli_fetch_array($result3);
$payid=$row3['payid']+1;
$sql2="INSERT INTO `payment` (`pay_no`, `emp_id`, `year`, `month`, `absence`, `loan_cut`, `pfund_cut`, `overtime`, `season_bonus`, `other_bonus`, `medi_allow`, `house_allow`, `total_pay`) VALUES ('$payid', '$empid', '$year', '$month', '$absence', '$loan_cut', '$pfund_cut', '$overtime', '$sbonus', '$obonus', '$medi_allow', '$house_allow', '$total');";
$sql_uploan="UPDATE `employee` SET `loan` = '$up_loan',`p_fund` = '$up_fund' WHERE `employee`.`Employee_id` = $empid;";
$done=mysqli_query($connection,$sql2);
$update=mysqli_query($connection,$sql_uploan);
if($done)
{
echo 'Successfully inserted payment data';
header('Location: employee.php');
}
else
{
echo 'Failed to insert payment data';
}
}
?>
