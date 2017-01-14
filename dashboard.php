<?php 
include 'config.php'; 
include 'contact.php'; 
 
$return_arr = array();
 
$fetch = mysqli_query($conn, "SELECT * FROM hotel"); 
if ($fetch->num_rows > 0) { 
 while($row = mysqli_fetch_assoc($fetch)) { 
  $c = new Contact(); 
  $c->id = $row['id']; 
  $c->nama = $row['nama']; 
  $c->alamat = $row['alamat']; 
  $c->notelp = $row['notelp'];
  $c->bintang = $row['bintang']; 
  $c->website = $row['website']; 
  $c->harga = $row['harga'];
  $c->image = $row['gambar'];  
  array_push($return_arr, $c); 
 } 
} else { 
 array_push($return_arr, 'No Data'); 
} 
 
$conn->close(); 
 
echo json_encode(array('contact' => $return_arr)); 
?>   