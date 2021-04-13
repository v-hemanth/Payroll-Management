<?php
include('configall.php');
$salary=$_POST["salary"];
$jobtitle=$_POST["jobtitle"];
$sql="UPDATE `job` SET `basic_salary` = '$salary' WHERE `Job_Title` ='$jobtitle';";
$test=mysqli_query($connection,$sql);
if($test)
{
header('Location:employee.php');
}
else{
echo'Failed to update salary update';
}
?>
