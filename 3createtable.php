<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE student(name CHAR(50), address TEXT(500), phone INT, email CHAR(100))";

if (mysqli_query($conn, $sql))
{
  echo "Table student created successfully";
}
else
{
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>