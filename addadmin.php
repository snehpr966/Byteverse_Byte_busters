<?php

$con = mysqli_connect("localhost", "root", "","medicinestore");
if($con)
{
	//echo 'connection successful';
		
}
$p = md5($_POST["password"]);

$sql= "insert into admin values('','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["house"]."','".$_POST["phone"]."','".$_POST["email"]."','".$p."')";

if(!mysqli_query($con,$sql))
{
	echo 'not inserted';
		
}
else
{
	
	header("Location:Admin.php?Admin Successfully Added");
}
?>