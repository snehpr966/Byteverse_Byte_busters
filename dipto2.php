 <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
	
	font-size:30px;
}
</style>
</head>
<body>

 
 <?php
global $data;
//require("functions.php");
$conn = mysqli_connect("localhost", "root", "","medicinestore");
$sql=("select * from medicine");
$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
//loadFromMySQL2("select * from medicine");


//loadFromMySQL2("select Pid,Pname,Company,Quantity,Price from medicine");
//$result = $conn->query($sql);
$data=array();
//$data[]=$result;

	


	
	
	if ($result->num_rows > 0) {
		echo "<table><tr><th>ID</th><th>Name</th><th>Company</th><th>Quantity</th><th>Price</th><th>Picture</th></tr>";
	
	
	while($row = $result->fetch_assoc()) {
		//$data[]=$row;
		
		if(file_exists($row["Picture"]))
		{
	        $a="<img alt='not found' src='".$row["Picture"]."' width='100px' height='50px'/>";
		
			echo "<tr><td>".$row["Pid"]."</td><td>".$row["Pname"]."</td><td> ".$row["Company"]."</td><td>".$row["Quantity"]."</td><td>".$row["Price"]."</td><td>".$a."</td></tr>";
		}
	}
		 echo "</table>";
		
		
	
	}
	
	
	
	
	


?>
</body>
</html>