<?php

$host = "db";
$user = "ctf";
$password = "password";
$database = "web_blindsql";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>
