<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>
<body>
<center>
<h2>Login Page</h2><br>
<form method="post" action="">
Username : <input type="text" name="username" placeholder="admin"><br><br>
Password : <input type="password" name="password" placeholder="*****"><br><br>
<input type="submit" name="submit" value="Login">
</form>
<?php
session_start();
require('configall.php');
if(isset($_POST['username']) and isset($_POST['password'])){
$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT * FROM admin WHERE username='$username' and password='$password'";
$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
$count=mysqli_num_rows($result);
if($count==1)
{
$_SESSION['username']=$username;
echo"You have logged in successfully";
header("location: home.php");
}
else{
$fmsg="Invalid username or password";
echo"<br>Invalid username or password";
}
}
?></center>
</body>
</html>
