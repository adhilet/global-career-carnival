<?php

require_once 'config.php';

$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email-address'];
$phone = $_POST['phone-number'];
$qualification = $_POST['qualification'];
$school = $_POST['school'];
$guardianName = $_POST['guardian-name'];
$guardianContact = $_POST['guardian-contact'];
$place = $_POST['place'];

$sql = "INSERT INTO registrations (first_name, last_name, email, phone, qualification, school, guardian_name, guardian_contact, place) 
        VALUES ('$firstName', '$lastName', '$email', '$phone', '$qualification', '$school', '$guardianName', '$guardianContact', '$place')";

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
