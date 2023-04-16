<?php

$con = mysqli_connect("localhost", "root", "","medicinestore");
if($con)
{
	//echo 'connection successful';
		

}
$sql="update medicine set `Pname`='".$_POST["productname"]."', `Company`='".$_POST["companyname"]."', `Category`='".$_POST["category"]."', `Quantity`='".$_POST["quantity"]."', `Price`='".$_POST["price"]."' where Pname='".$_POST["productname"]."' ";

if(!mysqli_query($con,$sql))
{
	echo 'not inserted';
		
}
else
{
	
	header("Location:updateProduct.php?Product Successfully updated");
}
?>