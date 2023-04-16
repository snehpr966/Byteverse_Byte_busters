<?php
$data=array();
require("functions.php");
if(isset($_REQUEST["flag"]) && $_REQUEST["flag"]=="loadmedicine"){
	$sql="select * from medicine where Pname='".$_REQUEST["Pname"]."'";	
	//echo $sql;
	//loadFromText();
	loadFromMySQL2($sql);
	echo json_encode($data);
	//print_r($data);
}
?>