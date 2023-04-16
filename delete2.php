<?php

$con = mysqli_connect("localhost", "root", "","medicinestore");
if($con)
{
	//echo 'connection successful';
		

}
$sql="Delete from medicine where Pname='".$_POST["productname"]."' ";

if(!mysqli_query($con,$sql))
{
	echo 'not inserted';
		
}
else
{
	
	header("Location:updateProduct.php?Product Successfully updated");
}
?>