<?php
session_start();

require_once "../config/config.php";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};

$id = $_POST['deleteE'];
$stmt = $conn->prepare("DELETE FROM `employees` WHERE `employees`.`id`= (?)");
$stmt->bind_param("d", $id);
$stmt->execute();
header("Location: /employess.php");
echo "record deleted";