<?php 

$host = 'localhost';
$username = 'root';
$password = 'Kuliah22!';
$database = 'daftar_peminjam';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Koneksi database gagal: ".$conn->connect_error );
};

?>