<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mahasiswa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if($conn->connect_error)
{
	die("Koneksi gagal" . $conn->connect_error);
}
echo "koneksi berhasil";
?>