<?php

$host = "localhost"; 
$user = "u342666704_gcc"; 
$pass = "Gcc@2025"; 
$db   = "u342666704_careercarnival"; 

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$phone = htmlspecialchars(trim($_POST['phone']));
$company = htmlspecialchars(trim($_POST['company']));
$message = htmlspecialchars(trim($_POST['message']));

// Insert query
$sql = "INSERT INTO `form-submission` (name, email, phone, company, message) 
        VALUES ('$name', '$email', '$phone', '$company', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('✅ Message sent successfully! We’ll get back to you soon.');
        window.location.href = '/';
    </script>";
} else {
    echo "<script>
        alert('❌ Something went wrong. Please try again.');
        window.history.back();
    </script>";
}

mysqli_close($conn);
?>
