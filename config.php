<?php  
$servername = "ap-cdbr-azure-southeast-b.cloudapp.net:3306"; 
$username = "bd1ee8df4231d8"; 
$password = "b27d88e5"; 
$dbname = "acsm_3dcee0f56b3ccb5"; 
// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname); 
// Check connection 
if ($conn->connect_error) { 
     die("Connection failed: " . $conn->connect_error); 
}
else{
	//echo "Berhasil";
}  
?> 