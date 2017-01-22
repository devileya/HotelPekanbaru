<?php   
include 'config.php'; 
//$json=$_GET ['json']; 
$json = file_get_contents('php://input'); 
$obj = json_decode($json); 
 //$image = $_POST['image'];
//echo $json; 
 
//Insert Query 
$result = mysqli_query($conn, "INSERT INTO hotel(nama,alamat,notelp,bintang,website,harga,gambar,latitude,longitude) 
VALUES ('".$obj->{'nama'}."', '".$obj->{'alamat'}."', '".$obj->{'notelp'}."',".$obj->{'bintang'}.", '".$obj->{'website'}."', ".$obj->{'harga'}.", '".$obj->{'image'}."', '".$obj->{'latitude'}."', '".$obj->{'longitude'}."')"); 
//mysql_close($con); 
$conn->close(); 
// 
 //$posts = array($json); 
  if($result) { 
 echo json_encode(array('posts'=>array("Success")));  
  } else { 
 echo json_encode(array('posts'=>array("Fail")));  
  } 
    //$posts = array(1); 
    //header('Content-type: application/json'); 
    //echo json_encode(array('posts'=>$posts));  
  ?> 
