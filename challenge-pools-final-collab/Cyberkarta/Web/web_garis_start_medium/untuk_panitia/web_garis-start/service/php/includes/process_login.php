<?php

session_start();

function exec_query($email, $pass)
{
	$conn = new mysqli("garis_start_mysql", getenv("MYSQL_USER"), getenv("MYSQL_PASS"), "garisstart");

	// Check connection
	if ($conn->connect_error) {
		die("Koneksi Gagal, Kontak ke Tim CTF kami.");
	}
	
	$result = $conn->query("SELECT email, password FROM users WHERE email='" . $email . "' AND password='" . $pass . "';");
	return $result;
}

if ($_SERVER['HTTP_X_FORWARDED_FOR'] != '192.168.100.11')
{
	header('HTTP/1.0 403 Forbidden');
	die('<h1>Forbidden</h1><p>Hanya admin yang diperbolehkan</p>');
}

$_SESSION['admin'] = false;

// Handle form submission
if (isset($_POST['email']) && isset($_POST['pass']))
{
	$result = exec_query($_POST['email'], $_POST['pass']);	

	if ($result && $row = $result->fetch_assoc()) {
		if ($row['email'] == $_POST['email'] && $row['password'])
		{
			$_SESSION['admin'] = true;
		}
	}
}

?>
