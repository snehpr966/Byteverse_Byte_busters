<?php
require("functions.php");
$phone=$_REQUEST["phone"];
$pass=$_REQUEST["password"];
$confirm=$_REQUEST["confirmpassword"];

if($pass == $confirm)
{
	if(strlen($phone)==11)
	{
    addAdmin();
    header('location: Admin.php?New Admin Successfully Added');
    }
    else
    {
    	header('location: Admin.php?Invaid Phone Number');
    }
}
else
{
	header('location: Admin.php?Password And Confirm Password Do not matched');
}


$con = mysqli_connect("localhost", "root", "","medicinestore");
if($con)
{
	echo 'connection successful';
		
}

$sql= "insert into admin values('','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["house"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["password"]."')";

if(!mysqli_query($con,$sql))
{
	echo 'not inserted';
		
}
else
{
	echo 'inserted';
}




?>


