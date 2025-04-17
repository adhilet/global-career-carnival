<?php
require_once 'config.php';



// Prepare and bind
$stmt = $conn->prepare("INSERT INTO form_submission (name, email, phone, company, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $phone, $company, $message);

// Execute and check
if ($stmt->execute()) {
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


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$message = $_POST['message'];

// Insert query
$sql = "INSERT INTO form_submission (name,email,phone,company,message) 
        VALUES ('$name', '$email', '$email', '$phone', '$company', '$message')";

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
