<?php

require("functions.php");


$phone=$_REQUEST["phone"];
  if(strlen($phone)==11)
	{
    
	$sql="insert into contact values('".$_POST["name"]."','".$_POST["email"]."','".$_POST["mobile"]."','".$_POST["subject"]."','".$_POST["message"]."')";
	//echo $sql;
	$u=updateSQL($sql);
	
   header('location: Contact.html? Message Successfully Send');
    }
    else
    {
    	header('location: Contact.html?Invaid Phone Number');
    }
	
	
	
	
	
	
	



?>