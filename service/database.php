<?php
$hostname = "127.0.0.1:3308";
$username = "root";
$password = (string) "";
$database = "user_name";

$db = mysqli_connect($hostname, $username, $password, $database);

if(!$db) {
    die("koneksi database rusak" . mysqli_connect_error());
} 
    
echo "koneksi berhasil";

?>