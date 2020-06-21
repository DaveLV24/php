<?php
require_once "../config/config.php";
require_once "index.php";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};



if (isset($_GET['editT'])){
    $id = $_GET['editT'];
    $result = $mysqli->query("SELECT * FROM employees WHERE id=$id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $name = $row['name'];
        $address = $row['address'];
        $salary = $row['salary'];
        header("Location: /index.php");
    }
}