<?php

$host = "localhost"; 
$user = "u342666704_gcc"; 
$pass = "Gcc@2025"; 
$db   = "u342666704_careercarnival"; 

// Connect to DB
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data & sanitize
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$company = trim($_POST['company']);
$message = trim($_POST['message']);

// Prepare SQL query
$sql = "INSERT INTO `form_submission` (name, email, phone, company, message) VALUES (?, ?, ?, ?, ?)";

// Initialize statement
$stmt = mysqli_prepare($conn, $sql);

// Bind parameters to the statement
mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $phone, $company, $message);

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
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

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
