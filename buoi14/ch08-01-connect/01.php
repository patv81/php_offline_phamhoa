<?php
	// Kết nối
	$conn = new mysqli('localhost', 'root', 'lilili');

// Kiểm tra kết nối
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
	mysql_close($connect);