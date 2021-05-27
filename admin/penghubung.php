<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "penilaian";

$conn = new mysqli($hostname,$username,$password,$database);

if($conn -> connect_error) {
	die("database tidak terkoneksi".$conn -> connect_error);
}

?>