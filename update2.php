<?php

$con = mysqli_connect("localhost", "root", "","medicinestore");

if($con)
{
	//echo 'connection successful';
		

}


$sql="update medicine set `Quantity`= `Quantity` -'".$_POST["Quantity"]."' where Pname='".$_POST["Pname"]."' ";

if(!mysqli_query($con,$sql))
{
	echo 'not inserted';
		
}
else
{
		$sql2="Delete from cart where Mname='".$_POST["Pname"]."' ";
			if(!mysqli_query($con,$sql2))
		{
			echo 'not inserted';
				
		}
		else
		{
			header("Location:Confirm.php?Product Successfully updated");
		}
}
?>