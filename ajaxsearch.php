
	
<?php
$data=array();
require("functions.php");
if($_GET["Pname"] != "")
{
$sql="select * from medicine where Pname LIKE '".$_GET["Pname"]."%'";

loadFromMySQL1($sql);
foreach($auth as $v){
	echo "<p>";
	echo $v["Pname"]."<br>";
	echo "</p>";
	
}
if(sizeof($auth)==0) 
	echo "Medicine is not available";
}
//print_r($data);
?>