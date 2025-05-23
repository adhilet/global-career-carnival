<?php

require_once 'config.php';

// Collect form data
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email-address'];
$phone = $_POST['phone-number'];
$qualification = $_POST['qualification'];
$school = $_POST['school'];
$guardianName = $_POST['guardian-name'];
$guardianContact = $_POST['guardian-contact'];
$place = $_POST['place'];

// Optional A+ count (only for +2 students)
$aplusCount = isset($_POST['aplus-count']) ? (int) $_POST['aplus-count'] : 0;

// Use a prepared statement for safety
$stmt = $conn->prepare("INSERT INTO registrations 
  (first_name, last_name, email, phone, qualification, school, guardian_name, guardian_contact, place, aplus_count) 
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param(
  "sssssssssi",
  $firstName,
  $lastName,
  $email,
  $phone,
  $qualification,
  $school,
  $guardianName,
  $guardianContact,
  $place,
  $aplusCount
);

// Execute and check success
if ($stmt->execute()) {
  echo "<script>
    alert('🎉 Registration successful! We’ll get in touch with you soon.');
    window.location.href = '/';
  </script>";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
