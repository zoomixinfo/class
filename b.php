<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "one";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$username = $_POST['username'];

$sql = "SELECT *FROM account WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Username</th>";
    echo "<th>Password</th>";
    echo "</tr> <tr>";
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["username"]."</td>";
        echo "<td>".$row["password"]."</td>";
    }
    echo "</tr></table>";
  } else {
    echo "0 results";
  }