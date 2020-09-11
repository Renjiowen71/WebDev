<?php 
 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "tugas3"; 
 
// Membuat koneksi 
$conn = new mysqli($servername, $username, $password, $dbname); 
 
// Jika koneksi gagal 
if ($conn->connect_error) {  
	die("Connection failed: " . $conn->connect_error); } 
 
?> 
 
 