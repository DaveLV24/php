<?php
session_start();

require_once "../config/config.php";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};


$name = $_POST['name'];
$address = $_POST['address'];
$salary = $_POST['salary'];
$stmt = $conn->prepare("INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $address, $salary);
$stmt->execute();
header("Location: /index.php");

echo "New records created successfully";


