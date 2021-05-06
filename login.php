<?php
session_start();
$con=mysqli_connect('localhost,root,123456');
mysqli_select_db($con,'login2');
$name=$_POST['username'];
$passcode=$_POST['password'];
$s="select * from usertable where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{echo"username already taken";}
else
{
	$reg="insert into usertable(name,password)values('$name','$passcode')";
    mysqli_query($con,$reg);
	echo"regitration sucessfull";
}
?>