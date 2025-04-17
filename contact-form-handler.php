<?php
// DB config
$host = "localhost"; // or your DB host
$user = "u342666704_gcc"; // your DB user
$pass = "Gcc@2025"; // your DB password
$db   = "u342666704_careercarnival"; // your DB name

// Create connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data (sanitize to avoid injection)
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$phone = htmlspecialchars(trim($_POST['phone']));
$company = htmlspecialchars(trim($_POST['company']));
$message = htmlspecialchars(trim($_POST['message']));

// Escape input to prevent SQL injection
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$phone = mysqli_real_escape_string($conn, $phone);
$company = mysqli_real_escape_string($conn, $company);
$message = mysqli_real_escape_string($conn, $message);

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

// Close the connection
mysqli_close($conn);
?>
