<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'myDB';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$sql = "delete from student where name='ANU'";  
if(mysqli_query($conn, $sql)){  
 echo "Record deleted successfully";  
}else{  
echo "Could not deleted record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  
