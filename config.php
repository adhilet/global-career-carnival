<?php
$host = "localhost";
$user = "u342666704_gcc";
$pass = "Gcc@2025";
$db   = "u342666704_careercarnival";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
