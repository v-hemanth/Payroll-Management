<?php include('configall.php')
$sql="DELETE FROM `employee` WHERE Employee_id='$empid';";
if($connection->query($sql)===TRUE)
{
echo "successfully inserted into database";
}
else{
echo "somthing is wrong";
}
?>
