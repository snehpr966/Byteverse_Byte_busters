<?php

function Adminlogin()
{
    global $auth;
	$file=fopen("admin.txt","r")or die("File not Found");
	while($line=fgets($file)){
		$dar=array();
		$line=trim($line);
		$cr=explode(" ",$line);
		$dar=array("username"=>$cr[0],"password"=>$cr[5]);
		$auth[]=$dar;
	}
	return $auth;
   fclose($file);
}

function addAdmin()
{

  $file=fopen("admin.txt",'a') or die("fle open error");

	$c=fwrite($file,"\n");
	$c+=fwrite($file,$_REQUEST["firstname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["lastname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["house"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["phone"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["email"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,md5($_REQUEST["password"]));
	fclose($file);
}

function addHealth()
{

  $file=fopen("Health.txt",'a') or die("fle open error");

	$c=fwrite($file,"\r");
	$c+=fwrite($file,$_REQUEST["productname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["companyname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["category"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["quantity"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["date"]);
	$c+=fwrite($file," ");
	
	fclose($file);
}

function addBaby()
{

  $file=fopen("Baby.txt",'a') or die("fle open error");

	$c=fwrite($file,"\r");
	$c+=fwrite($file,$_REQUEST["productname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["companyname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["category"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["quantity"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["date"]);
	$c+=fwrite($file," ");
	
	fclose($file);
}


function addDental()
{

  $file=fopen("dental.txt",'a') or die("fle open error");

	$c=fwrite($file,"\r");
	$c+=fwrite($file,$_REQUEST["productname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["companyname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["category"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["quantity"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["date"]);
	$c+=fwrite($file," ");
	
	fclose($file);
}

function addIv()
{

  $file=fopen("iv.txt",'a') or die("fle open error");

	$c=fwrite($file,"\r");
	$c+=fwrite($file,$_REQUEST["productname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["companyname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["category"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["quantity"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["date"]);
	$c+=fwrite($file," ");
	
	fclose($file);
}

function addPower()
{

  $file=fopen("power.txt",'a') or die("fle open error");

	$c=fwrite($file,"\r");
	$c+=fwrite($file,$_REQUEST["productname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["companyname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["category"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["quantity"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["date"]);
	$c+=fwrite($file," ");
	
	fclose($file);
}

function addOrthopaedic()
{

  $file=fopen("orthopaedic.txt",'a') or die("fle open error");

	$c=fwrite($file,"\r");
	$c+=fwrite($file,$_REQUEST["productname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["companyname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["category"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["quantity"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["date"]);
	$c+=fwrite($file," ");
	
	fclose($file);
}

function addWomen()
{

  $file=fopen("women.txt",'a') or die("fle open error");

	$c=fwrite($file,"\r");
	$c+=fwrite($file,$_REQUEST["productname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["companyname"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["category"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["quantity"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["date"]);
	$c+=fwrite($file," ");
	
	fclose($file);
}



function contact()
{

  $file=fopen("contact.txt",'a') or die("fle open error");

	$c=fwrite($file,"\n");
	$c+=fwrite($file,$_REQUEST["name"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["email"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["mobile"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["subject"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["message"]);
	$c+=fwrite($file," ");
	
	fclose($file);
}

function LoadXml()
{
global $auth;
	$xml=simplexml_load_file("admin.xml") or die("Error: Cannot create object");
	foreach($xml->admin as $st){
		$dar=array();
		$dar["Firstname"]=(string)$st->Firstname;
		$dar["Password"]=(string)$st->Password;
		$auth[]=$dar;
	}
}


function getExt($filename){
	//abc.jpg
	$a=explode(".",$filename);
	return $a[1];
}

function updateSQL($sql){
	$conn = mysqli_connect("localhost", "root", "","medicinestore");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}

function loadFromMySQL($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","medicinestore");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$data[]=$row;
	}
}

function loadFromMySQL2($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","medicinestore");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$data[]=$row;
	}
}

function loadFromMySQL3($sql){
	global $auth;
	$conn = mysqli_connect("localhost", "root", "","medicinestore");
	
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$auth=array();
	
	while($row = mysqli_fetch_assoc($result)) {
		
		$ar=array();
		$ar["Firstname"]=$row["Firstname"];
		$ar["Password"]=$row["Password"];
		$auth[]=$ar;
		//print_r($auth);
	}
	//return $arr;
}



	

?>