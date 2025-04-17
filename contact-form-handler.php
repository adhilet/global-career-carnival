<?php
require_once 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$message = $_POST['message'];

// Insert query
$sql = "INSERT INTO form_submission (name,email,phone,company,message) 
        VALUES ('$name', '$email', '$phone','$company','$message')";

if ($conn->query($sql) === TRUE) {
  echo "<script>
    alert('🎉 Registration successful! We’ll get in touch with you soon.');
    window.location.href = '/';
  </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
