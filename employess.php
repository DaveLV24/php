<?php
require_once "../config/config.php";
require_once "../src/templates/addnewForm.html";


require_once ("../src/templates/header.php");
// require_once "../public/scripts/myjs.js";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";


$sql = "SELECT id, name, address, salary FROM employees";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Salary</th><th>Actions</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $id = $row["id"];
     echo "<tr><td>" . $row["id"]. "</td>" . "<td>" . $row["name"]. "</td>" . "<td>" . $row["address"]. "</td>" . "<td>" . $row["salary"].  "</td>" . "<td>
     <a class='edit' title='Edit' data-toggle='tooltip'><i class='glyphicon glyphicon-pencil'>Edit;</i></a>
    <form action='deleteEmployee.php' method='post'> <button type='submit' name='deleteE' value='$id'> X</button></form></td>";
  }
  echo "</table>";
} else {
  echo "0 results";
}