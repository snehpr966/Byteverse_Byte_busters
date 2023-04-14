<?php
require("functions.php");
$auth=array();

loadFromMySQL3("select * from admin");
$u=$_POST['username'];
$p=$_POST['password'];

$t=0;
session_start();
foreach($auth as $a){
	echo $a["Firstname"];
	if($u==$a["Firstname"] && $p==$a["Password"]){
		
		$t=1;
		$_SESSION["flag"]="loginSuccess";
		header("Location:Admin.php");
		break;
	}
}
if($t==0){
	
}

      

?>