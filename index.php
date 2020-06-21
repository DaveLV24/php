<?php
session_start();
require_once "../config/config.php";
require_once "../src/templates/addnewForm.html";
require_once "../src/templates/header.php";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT id, name, address, salary FROM employees";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<body><div class='container'>
        <div class='table-wrapper'>
            <div class='table-title'>
                <div class='row'>
                </div>
            </div>
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Salary</th>
                        <th>Actions</th>
                        
                    </tr>
                </thead>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $id = $row["id"];
      $name = $row["name"];
      $address = $row["address"];
      $salary = $row["salary"];
     echo "<tbody>
                <tr>
                    <td>" . $row["id"]. "</td>" .
                   "<td>" . $row["name"]. "</td>" .
                    "<td>" . $row["address"]. "</td>" .
                     "<td>" . $row["salary"]. "</td>" .
                     "<td>
                            <form action='deleteEmployee.php' method='post'>
                                    <button type='submit' name='deleteE' class='btn btn-danger btn-xs' value='$id'> X </button>
                            </form>
                            <form action='editEmployee.php?id=$id' method='post'>
                                    <button type='submit' name='editT' class='btn btn-info btn-xs'>EDIT</button>
                            </form>

                </tr>
          </tbody>";
  }
  echo "</table></div></div></body>";
} else {
  echo "no results to show";
}
  
