<?php
$conn = mysqli_connect("localhost", "root", "", "bank_system");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>