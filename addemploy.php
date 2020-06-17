<?php
session_start();

require_once "../config/config.php";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};

$employName = $_POST['employName'];
$employAdress = $_POST['employadress'];
$employSalary = $_POST['employsalary'];
$stmt = $conn->prepare("INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $employName, $employAdress, $employSalary);
$stmt->execute();
header("Location: /employess.php");

echo "New records created successfully";
