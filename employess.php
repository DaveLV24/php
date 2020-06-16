<?php
require_once "../config/config.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



$sql = "SELECT id, name, address, salary FROM employees";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Salary</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
     echo "<tr><td>" . $row["id"]. "</td>" . "<td>" . $row["name"]. "</td>" . "<td>" . $row["address"]. "</td>" . "<td>" . $row["salary"]. "</td>" ;
  }
  echo "</table>";
} else {
  echo "0 results";
}