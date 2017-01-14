<?php 
include 'config.php'; 
include 'contact.php'; 
 
$return_arr = array();
$nama=$_GET['nama']; 
$fetch = mysqli_query($conn, "SELECT distinct nama FROM hotel where nama='$nama'"); 
if ($fetch->num_rows > 0) { 
 while($row = mysqli_fetch_assoc($fetch)) { 
  $c = new Contact(); 
  $c->nama = $row['nama'];  
  array_push($return_arr, $c); 
 } 
} else { 
 array_push($return_arr, 'No Data'); 
} 
 
$conn->close(); 
 
echo json_encode(array('contact' => $return_arr)); 
?>   